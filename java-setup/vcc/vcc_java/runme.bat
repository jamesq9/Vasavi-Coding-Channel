@ECHO off

REM Compiling the Java Program
javac VCC.java

echo Running....

REM Running the Java Program
java -cp .;./mysql-connector-java-5.1.30-bin.jar VCC

