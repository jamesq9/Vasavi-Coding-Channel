
import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.io.*;

public class VCC {

	static String assets = "/home/vasavi/Desktop/vcc/vcc/";
	static String limit = "/home/vasavi/Desktop/vcc/vcc_java/limit.c";
	static String workspace = "/home/vasavi/Desktop/vcc/vcc_output/";
	static String C = ".c";
	static String CPP = ".cpp";
	static Connection connection = null;
	static int gcd=200;
	static int fact=200;
	static int tle=100;
	static int party=60;

	static ProcessBuilder remover2 = new ProcessBuilder("bash","-c","rm -f -r "+workspace+"*");;
	static Process rm2;


	@SuppressWarnings("deprecation")
	public static void main(String[] args) {
		/*
		 * System.out
		 * .println("-------- MySQL JDBC Connection Testing ------------");
		 */
		try {
			Class.forName("com.mysql.jdbc.Driver");
		} catch (ClassNotFoundException e) {
			/*
			 * System.out.println("Where is your MySQL JDBC Driver?");
			 */e.printStackTrace();
			return;
		}

		/*
		 * System.out.println("MySQL JDBC Driver Registered!");
		 */

		try {
			connection = DriverManager.getConnection(
					"jdbc:mysql://localhost:3306/vcc", "root", "vasavi@vcc");

		} catch (SQLException e) {
			System.out.println("Connection Failed! Check output console");
			e.printStackTrace();
			return;
		}

		if (connection != null) {
			/*
			 * System.out.println("You made it, take control your database now!")
			 * ;
			 */} else {
			System.out.println("Failed to make connection!");
		}


try {
	rm2 = remover2.start();
	int j= rm2.waitFor();
    
} catch(Exception e) {
	e.printStackTrace();
}

		System.out.println("Running...");
		String query = "select code,qcode,lang,uname,dt from queue order by dt";
		Statement st;
		while (true) {
			// System.out.println("sleeing");
			try {
				Thread.sleep(2000);
			} catch (Exception e) {

			}
			// System.out.println("waken up");

			try {
				st = connection.createStatement();
				ResultSet rs = st.executeQuery(query);
				while (rs.next()) {

					// clearing workspace
					rm2 = remover2.start();
					int j= rm2.waitFor();
					

					// creating a file
					String str = rs.getString("code");
					String input = rs.getString("qcode");
					String lang = rs.getString("lang");
					String uname = rs.getString("uname");
					String dt = rs.getString("dt");
					final String filename = uname;

					
					String EG, EXT, EXEC = workspace + uname;
					if (lang.equalsIgnoreCase("c")) {
						EG = "gcc";
						EXT = C;
					} else if (lang.equalsIgnoreCase("cpp")) {
						EG = "g++";
						EXT = CPP;
					} else {

						deleteRequest(uname, input, str, "unknown", dt, lang,
								"NA");
						// System.out.println("unknown");

						continue;
					}

					// compiling

					PrintWriter writer = new PrintWriter(workspace + filename
							+ EXT, "UTF-8");
					writer.println(str);
					writer.close();

					ProcessBuilder builder = new ProcessBuilder("bash", "-c",
							EG+ " -Wall -Werror=return-type "+""+" limit.c "+ workspace + filename + EXT+" -o "+EXEC+" 2>"
									+ workspace + "error.log");

					// builder.redirectErrorStream(true);
					Process p = builder.start();
					p.waitFor();

					File f = new File(EXEC);
					if (!(f.exists() && !f.isDirectory())) {

						String line = "", errorcode = "";

						File err = new File(workspace + "error.log");
						FileReader freader = new FileReader(err);
						BufferedReader reader1 = new BufferedReader(freader);

						for (int i = 0; i < 10
								&& (line = reader1.readLine()) != null; i++) {
							errorcode += line.replace(workspace + filename
									+ EXT, "cpp")
									+ "\n";
							// System.out.println(line+"error\n");
						}

						reader1.close();

						// update error code to table delete from queue thanks,
						deleteRequest(uname, input, str + "\n\n" + errorcode,
								"CE", dt, lang, "NA");
						// System.out.println("CE");
						continue;
					}

					// executing file

					String command = EXEC + "<" + assets + input + "_in.txt>"
							+ workspace + input + "_out.txt";
					// System.out.println(command);
					builder = new ProcessBuilder("bash", "-c", command);
					builder.redirectErrorStream(true);

					Thread t = new Thread() {
						public void run() {
							ProcessBuilder terminator = new ProcessBuilder(
									"bash", "-c", "pkill "+
									filename);

							try {
								Thread.sleep(VCC.tle);
								terminator.start();
							} catch (Exception e) {
								// TODO Auto-generated catch block
								e.printStackTrace();
							}
						}
					};
					t.start();
					p = builder.start();
					long startTime = System.nanoTime();
					int ret_val = p.waitFor();
					long endTime = System.nanoTime();
					long totalTime = (endTime - startTime) / 1000000;
					if (ret_val==0  ) {
						

						f = new File(workspace + input + "_out.txt");
						if (f.exists()
								&& compareFile(assets + input + "_out.txt",
										workspace + input + "_out.txt") == 1) {
							deleteRequest(uname, input, str, "AC", dt, lang,
									totalTime + "");
							// System.out.println("AC");
						} else {
							deleteRequest(uname, input, str, "WA", dt, lang,
									totalTime + "");
							// System.out.println("WA");
						}
					} else if(ret_val == 15) {
						deleteRequest(uname, input, str, "TLE", dt, lang,
								totalTime + "");
						// System.out.println("TLE");
					} else {
						deleteRequest(uname, input, str, "RE_"+ret_val, dt, lang,
								totalTime + "");
					}

				}// while for rs.next

			} catch (Exception e) {
				e.printStackTrace();
			}
		}

	}

	public static void deleteRequest(String uname, String qcode, String code,
			String status, String dt, String lang, String tottime) {
		String delete_query = "DELETE FROM queue WHERE uname='" + uname + "'";
		String ins_submission = "INSERT INTO `submissions`(`uname`, `qcode`, `code`, `status`, "
				+ " `dt`, `lang`, `exectime`) VALUES (?,?,?,?,?,?,?)";

		String solved = "INSERT INTO solved(`uname`, `qcode`) SELECT * FROM (SELECT ?,?)  AS tmp "
				+ "WHERE NOT EXISTS ( "
				+ "SELECT uname,qcode FROM solved where uname=? and qcode=? ) LIMIT 1";

		if (status.equals("AC")) {

			String s = "select uname from solved where uname=? && qcode=? limit 1";
			try {
				PreparedStatement preparedStatement = connection
						.prepareStatement(s);
				preparedStatement.setString(1, uname);
				preparedStatement.setString(2, qcode);
				ResultSet rs = preparedStatement.executeQuery();
				
				if (!rs.next()) {
					
					s = "insert into scoreboard values (?,?) on duplicate key update score = score + 100 ";
					try {
						 preparedStatement = connection
								.prepareStatement(s);
						 preparedStatement.setString(1, uname);
						 preparedStatement.setInt(2, 100);
						 preparedStatement.executeUpdate();

					} catch (SQLException e) {
						// TODO Auto-generated catch block
						// e.printStackTrace();
						System.out
								.println("User score update failed 100.. awh..");
					}
					

					try {
						 preparedStatement = connection
								.prepareStatement(solved);
						preparedStatement.setString(1, uname);
						preparedStatement.setString(2, qcode);
						preparedStatement.setString(3, uname);
						preparedStatement.setString(4, qcode);
						preparedStatement.executeUpdate();
					} catch (Exception e) {
						System.out.println("solved error" + e);
					}
				

				}
				String k = "update questions set AC=AC+1 where qcode=?";
		PreparedStatement preparedStatement1;
		try {
			preparedStatement1 = connection.prepareStatement(k);
			preparedStatement1.setString(1,qcode);
			preparedStatement1.executeUpdate();

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			// e.printStackTrace();
			System.out.println("AC inc failed awh..");
		}


			} catch (Exception e) {
				System.out.println("Fetching if AC or not error ..Awh.." + e);
			}

		} else {
			String s = "update questions set WA=WA+1 where qcode=?";

			PreparedStatement preparedStatement;
			try {
				preparedStatement = connection.prepareStatement(s);
				preparedStatement.setString(1,qcode);
				preparedStatement.executeUpdate();
			} catch (SQLException e) {
				// TODO Auto-generated catch block
				// e.printStackTrace();
				System.out.println("WA inc failed awh..");
			}

			s = "insert into scoreboard values (?,?) on duplicate key update score = score - 1";
			try {
				preparedStatement = connection.prepareStatement(s);
				preparedStatement.setString(1, uname);
				preparedStatement.setInt(2, -1);
				preparedStatement.executeUpdate();

			} catch (SQLException e) {
				// TODO Auto-generated catch block
				// e.printStackTrace();
				System.out.println("User score update failed.. awh..");
			}
		}
		
		
		
		try {
			PreparedStatement preparedStatement = connection
					.prepareStatement(ins_submission);
			preparedStatement.setString(1, uname);
			preparedStatement.setString(2, qcode);
			preparedStatement.setString(3, code);
			preparedStatement.setString(4, status);
			preparedStatement.setString(5, dt);
			preparedStatement.setString(6, lang);
			preparedStatement.setString(7, tottime);
			preparedStatement.executeUpdate();

		} catch (Exception e) {
			System.out.println("failed at ins submission");
			e.printStackTrace();
		}

		Statement st;

		/*
		 * try { st = connection.createStatement();
		 * st.executeUpdate(ins_submission); }catch(Exception e) {
		 * System.out.println("failed at deletereq submission"); }
		 */
		try {
			st = connection.createStatement();
			st.executeUpdate(delete_query);
		} catch (Exception e) {
			System.out.println("failed at deletereq at dele query");
		}

	}

	public static int compareFile(String fILE_ONE2, String fILE_TWO2)
			throws Exception {

		File f1 = new File(fILE_ONE2); // OUTFILE
		File f2 = new File(fILE_TWO2); // INPUT

		FileReader fR1 = new FileReader(f1);
		FileReader fR2 = new FileReader(f2);

		BufferedReader reader1 = new BufferedReader(fR1);
		BufferedReader reader2 = new BufferedReader(fR2);

		String line1 = null;
		String line2 = null;

		int flag = 1;

		if ((line2 = reader2.readLine()) == null) {
			reader1.close();
			reader2.close();
			return 0;
		} else
			line1 = reader1.readLine();

		// if()
		do {
			if (!line1.equals(line2)) {
				flag = 0;
				break;
			}
		} while (((line1 = reader1.readLine()) != null)
				&& ((line2 = reader2.readLine()) != null));
		
		if(line1!= null || (line2 = reader2.readLine()) != null ) {
			flag=0;
			//System.out.println("L1: "+line1 + "L2:"+line2);
		}

		reader1.close();
		reader2.close();
		return flag;

	}
}
