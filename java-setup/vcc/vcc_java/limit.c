#include <sys/resource.h> 
#include <sys/time.h> 
#include <stdio.h> 
#include <stdlib.h>
#include <signal.h>

void ERROR_HANDLER(int sig)
{
  switch(sig)
  {
    case SIGABRT:
      fputs("Caught SIGABRT: usually caused by an abort() or assert()\n", stderr);
      //signal 6
      break;
    case SIGFPE:
      fputs("Caught SIGFPE: arithmetic exception, such as divide by zero\n",
            stderr);
      // Signal 8 
      break;
    case SIGILL:
      fputs("Caught SIGILL: illegal instruction\n", stderr);
      //signal 4
      break;
    case SIGINT:
      fputs("Caught SIGINT: interactive attention signal, probably a ctrl+c\n",
            stderr);
      //signal 2
      break;
    case SIGSEGV:
      fputs("Caught SIGSEGV: segfault\n", stderr);
      //signal 11 was sent
      break;
    case SIGTERM:
    default:
      fputs("Caught SIGTERM: a termination request was sent to the program\n",
            stderr);
      //signal 15 TLE
      break;
  }
  _Exit(sig);
}

void Init(void) __attribute__((constructor));

void Init(void) { 
	struct rlimit r1,r2,r3,r4; 
	
  signal(SIGABRT, ERROR_HANDLER);
  signal(SIGFPE,  ERROR_HANDLER);
  signal(SIGILL,  ERROR_HANDLER);
  signal(SIGINT,  ERROR_HANDLER);
  signal(SIGSEGV, ERROR_HANDLER);
  signal(SIGTERM, ERROR_HANDLER);
  
  //r1.rlim_max = r1.rlim_cur = 1;
  //setrlimit (RLIMIT_AS, &r1);  // no virtual memory space given .. SIGSEGV

  //r2.rlim_max = r2.rlim_cur = 1;
  //setrlimit (RLIMIT_DATA, &r2);  // less SEGEMTN SAPCE space give .. SIGSEGV

	
  r3.rlim_max = r3.rlim_cur = 5;
  setrlimit (RLIMIT_NOFILE, &r3);  // no File acess .. 

   r4.rlim_max = r4.rlim_cur = 0;
  setrlimit (RLIMIT_NPROC, &r4);  // no Child Process .. 

 } 




 /*
 struct rlimit {
    rlim_t rlim_cur;  // Soft limit 
    rlim_t rlim_max;  // Hard limit (ceiling for rlim_cur) 
};
*/