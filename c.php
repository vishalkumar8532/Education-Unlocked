<script type="text/javascript" src="js/chat.js"></script>
<?php include "notes.php"; ?>
   <div class="main">
      <center>
         <h2>C Programming</h2>
      </center>
      <center>
         <h3>Why to Learn C Programming?</h3>
      </center>
      <p>C programming language is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Software Development Domain. I will list down some of the key advantages of learning C Programming: <br>
         *Easy to learn <br>
         *Structured language <br>
         *It produces efficient programs <br>
         *It can handle low-level activities <br>
         *It can be compiled on a variety of computer platforms <br>

         <center>
            <h3>Facts about C</h3>
         </center>
         C was invented to write an operating system called UNIX.<br>

         C is a successor of B language which was introduced around the early 1970s.<br>

         The language was formalized in 1988 by the American National Standard Institute (ANSI).<br>

         The UNIX OS was totally written in C.<br>

         Today C is the most widely used and popular System Programming Language.<br>

         Most of the state-of-the-art software have been implemented using C.<br>

         <center>
            <h3>Hello World using C Programming.</h3>
         </center>
         Just to give you a little excitement about C programming, I'm going to give you a small conventional C Programming Hello World program, You can try it using Demo link. <br>

         Live Demo<br>
         #include <stdio.h> <br>

            int main() {<br>
            /* my first program in C */<br>
            printf("Hello, World! \n");<br>

            return 0;<br>
            }<br>
            <center>
               <h3>Applications of C Programming</h3>
            </center>
            C was initially used for system development work, particularly the programs that make-up the operating system. C was adopted as a system development language because it produces code that runs nearly as fast as the code written in assembly language. Some examples of the use of C are -<br>
            <pre>
* Operating Systems
* Language Compilers
* Assemblers
* Text Editors
* Print Spoolers
* Network Drivers  
* Modern Programs
* Databases
* Language Interpreters
* Utilities</pre>

            <center>
               <h3> Environment Setup </h3>
            </center>
            If you want to set up your environment for C programming language, you need the following two software tools available on your computer, (a) Text Editor and (b) The C Compiler.
            <h4>a-Text Editor</h4>
            This will be used to type your program. Examples of few a editors include Windows Notepad, OS Edit command, Brief, Epsilon, EMACS, and vim or vi.

            The name and version of text editors can vary on different operating systems. For example, Notepad will be used on Windows, and vim or vi can be used on windows as well as on Linux or UNIX.

            The files you create with your editor are called the source files and they contain the program source codes. The source files for C programs are typically named with the extension ".c".

            Before starting your programming, make sure you have one text editor in place and you have enough experience to write a computer program, save it in a file, compile it and finally execute it.

            <h4>b-The C Compiler</h4>
            The source code written in source file is the human readable source for your program. It needs to be "compiled", into machine language so that your CPU can actually execute the program as per the instructions given.

            The compiler compiles the source codes into final executable programs. The most frequently used and free available compiler is the GNU C/C++ compiler, otherwise you can have compilers either from HP or Solaris if you have the respective operating systems.

            The following section explains how to install GNU C/C++ compiler on various OS. We keep mentioning C/C++ together because GNU gcc compiler works for both C and C++ programming languages.

            <h4>Installation on Windows</h4>
            To install GCC on Windows, you need to install MinGW. To install MinGW, go to the MinGW homepage, www.mingw.org, and follow the link to the MinGW download page. Download the latest version of the MinGW installation program, which should be named MinGW-<version>.exe.

               While installing Min GW, at a minimum, you must install gcc-core, gcc-g++, binutils, and the MinGW runtime, but you may wish to install more.

               Add the bin subdirectory of your MinGW installation to your PATH environment variable, so that you can specify these tools on the command line by their simple names.

               After the installation is complete, you will be able to run gcc, g++, ar, ranlib, dlltool, and several other GNU tools from the Windows command line.

               <center>
                  <h3> C - Program Structure</h3>
               </center>
               Before we study the basic building blocks of the C programming language, let us look at a bare minimum C program structure so that we can take it as a reference in the upcoming chapters.
               <pre>
Hello World Example
A C program basically consists of the following parts −
Preprocessor Commands
Functions
Variables
Statements & Expressions
Comments
Let us look at a simple code that would print the words "Hello World" 

  #include <stdio.h>

    int main() {
       /* my first program in C */
       printf("Hello, World! \n");
       
       return 0;
    }
    
</pre>
               Let us take a look at the various parts of the above program − <br>

               *The first line of the program #include <stdio.h> is a preprocessor command, which tells a C compiler to include stdio.h file before going to actual compilation.<br>

                  *The next line int main() is the main function where the program execution begins.<br>

                  *The next line /*...*/ will be ignored by the compiler and it has been put to add additional comments in the program. So such lines are called comments in the program.<br>

                  *The next line printf(...) is another function available in C which causes the message "Hello, World!" to be displayed on the screen.<br>

                  *The next line return 0; terminates the main() function and returns the value 0.<br>

                  <center>
                     <h3> C - Basic Syntax</h3>
                  </center>
                  You have seen the basic structure of a C program, so it will be easy to understand other basic building blocks of the C programming language.
                  <h4>Tokens in C</h4>A C program consists of various tokens and a token is either a keyword, an identifier, a constant, a string literal, or a symbol. For example, the following C statement consists of five tokens

                  <h4>1 Semicolons</h4>In a C program, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.
                  Given below are two different statements <br>
                  printf("Hello, World! \n"); <br>
                  return 0; <br>

                  <h4>2 Comments</h4>Comments are like helping text in your C program and they are ignored by the compiler. They start with /* and terminate with the characters */ as shown below −
                  /* my first program in C */ <br>

                  <h4>3 Identifiers</h4>A C identifier is a name used to identify a variable, function, or any other user-defined item. An identifier starts with a letter A to Z, a to z, or an underscore '_' followed by zero or more letters, underscores, and digits (0 to 9).
                  C does not allow punctuation characters such as @, $, and % within identifiers. C is a case-sensitive programming language. Thus, Manpower and manpower are two different identifiers in C. Here are some examples of acceptable identifiers −
                  <pre>
  mohd       zara    abc   move_name  a_123
  myname50   _temp   j     a23b9      retVal</pre>

                  <h4>4 Keywords</h4>The following list shows the reserved words in C. These reserved words may not be used as constants or variables or any other identifier names.
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\mini.png">

                  <h4>5 Whitespace in C</h4>A line containing only whitespace, possibly with a comment, is known as a blank line, and a C compiler totally ignores it.

                  Whitespace is the term used in C to describe blanks, tabs, newline characters and comments. Whitespace separates one part of a statement from another and enables the compiler to identify where one element in a statement, such as int, ends and the next element begins

                  <center>
                     <h3> C - Data Types</h3>
                  </center>
                  Data types in c refer to an extensive system used for declaring variables or functions of different types. The type of a variable determines how much space it occupies in storage and how the bit pattern stored is interpreted.

                  The types in C can be classified as follows −<br>

                  1 Basic Types-They are arithmetic types and are further classified into: (a) integer types and (b) floating-point types. <br>

                  2 Enumerated types-They are again arithmetic types and they are used to define variables that can only assign certain discrete integer values throughout the program.<br>

                  3 The type void-The type specifier void indicates that no value is available.<br>

                  4 Derived types-They include (a) Pointer types, (b) Array types, (c) Structure types, (d) Union types and (e) Function types.<br>

                  <center>
                     <h3> C - Variables</h3>
                  </center>
                  A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in C has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable. <br>

                  The name of a variable can be composed of letters, digits, and the underscore character. It must begin with either a letter or an underscore. Upper and lowercase letters are distinct because C is case-sensitive. Based on the basic types explained in the previous chapter, there will be the following basic variable types <br>
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\variables.png">


                  <h4>Variable Definition in C</h4>A variable definition tells the compiler where and how much storage to create for the variable. A variable definition specifies a data type and contains a list of one or more variables of that type as follows − <br>
                  type variable_list; <br>
                  Here, type must be a valid C data type including char, w_char, int, float, double, bool, or any user-defined object; and variable_list may consist of one or more identifier names separated by commas. Some valid declarations are shown here −
                  <pre>
int    i, j, k; 
char   c, ch;
float  f, salary;
double d;

</pre>
                  <h4>Variable Declaration in C</h4> variable declaration provides assurance to the compiler that there exists a variable with the given type and name so that the compiler can proceed for further compilation without requiring the complete detail about the variable. A variable definition has its meaning at the time of compilation only, the compiler needs actual variable definition at the time of linking the program.
                  <pre>
  #include <stdio.h>

// Variable declaration:
extern int a, b;
extern int c;
extern float f;

int main () {

   /* variable definition: */
   int a, b;
   int c;
   float f;
 
   /* actual initialization */
   a = 10;
   b = 20;
  
   c = a + b;
   printf("value of c : %d \n", c);

   f = 70.0/3.0;
   printf("value of f : %f \n", f);
 
   return 0;
}
</pre>
                  When the above code is compiled and executed, it produces the following result −
                  <pre>
  value of c : 30
  value of f : 23.333334
</pre>

                  <center>
                     <h3> C - Constants and Literals</h3>
                  </center>
                  Constants refer to fixed values that the program may not alter during its execution. These fixed values are also called literals.

                  Constants can be of any of the basic data types like an integer constant, a floating constant, a character constant, or a string literal. There are enumeration constants as well.

                  Constants are treated just like regular variables except that their values cannot be modified after their definition.

                  <h4>Integer Literals</h4>An integer literal can be a decimal, octal, or hexadecimal constant. A prefix specifies the base or radix: 0x or 0X for hexadecimal, 0 for octal, and nothing for decimal.

                  An integer literal can also have a suffix that is a combination of U and L, for unsigned and long, respectively. The suffix can be uppercase or lowercase and can be in any order.


                  <h4>Floating-point Literals</h4>A floating-point literal has an integer part, a decimal point, a fractional part, and an exponent part. You can represent floating point literals either in decimal form or exponential form.

                  While representing decimal form, you must include the decimal point, the exponent, or both; and while representing exponential form, you must include the integer part, the fractional part, or both. The signed exponent is introduced by e or E.

                  <h4>Character Constants</h4>Character literals are enclosed in single quotes, e.g., 'x' can be stored in a simple variable of char type.

                  A character literal can be a plain character (e.g., 'x'), an escape sequence (e.g., '\t'), or a universal character (e.g., '\u02C0').

                  There are certain characters in C that represent special meaning when preceded by a backslash for example, newline (\n) or tab (\t).

                  <h4>String Literals</h4>String literals or constants are enclosed in double quotes "". A string contains characters that are similar to character literals: plain characters, escape sequences, and universal characters.

                  You can break a long line into multiple lines using string literals and separating them using white spaces.
                  <h4>*Defining Constants</h4>
                  There are two simple ways in C to define constants − <br>

                  1 Using #define preprocessor. <br>
                  Given below is the form to use #define preprocessor to define a constant − <br>

                  #define identifier value <br>

                  2 Using const keyword. <br>
                  ou can use const prefix to declare constants with a specific type as follows − <br>

                  const type variable = value;
                  <pre>
#include <stdio.h>

int main() {
   const int  LENGTH = 10;
   const int  WIDTH = 5;
   const char NEWLINE = '\n';
   int area;  
   
   area = LENGTH * WIDTH;
   printf("value of area : %d", area);
   printf("%c", NEWLINE);

   return 0;
}
</pre>

                  <center>
                     <h3> C - Operators</h3>
                  </center>
                  An operator is a symbol that tells the compiler to perform specific mathematical or logical functions. C language is rich in built-in operators and provides the following types of operators −
                  <pre>
1 Arithmetic Operators
2 Relational Operators
3 Logical Operators
4 Bitwise Operators
5 Assignment Operators
</pre>

                  We will, in this chapter, look into the way each operator works.
                  <h4>Arithmetic Operators</h4>
                  The following table shows all the arithmetic operators supported by the C language. Assume variable A holds 10 and variable B holds 20 then −
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\arithmetic.png">
                  <h4>Relational Operators</h4>The following table shows all the relational operators supported by C. Assume variable A holds 10 and variable B holds 20 then −
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\relational.png">
                  <h4>Logical Operators</h4>Following table shows all the logical operators supported by C language. Assume variable A holds 1 and variable B holds 0, then
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\logical.png">
                  <h4>Bitwise Operators</h4>Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &, |, and ^ is as follows −
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\bitwise.png">
                  <h4>Assignment Operators</h4>The following table lists the assignment operators supported by the C language −
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\assignment.png">

                  <center>
                     <h3>C - Decision Making</h3>
                  </center>
                  Decision making structures require that the programmer specifies one or more conditions to be evaluated or tested by the program, along with a statement or statements to be executed if the condition is determined to be true, and optionally, other statements to be executed if the condition is determined to be false. <br>

                  Show below is the general form of a typical decision making structure found in most of the programming languages −
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\condition.png"> <br>
                  C programming language assumes any non-zero and non-null values as true, and if it is either zero or null, then it is assumed as false value. <br>

                  C programming language provides the following types of decision making statements. <br>
                  1 if statement -
                  An if statement consists of a boolean expression followed by one or more statements. <br>

                  2 if...else statement -
                  An if statement can be followed by an optional else statement, which executes when the Boolean expression is false. <br>

                  3 nested if statements -
                  You can use one if or else if statement inside another if or else if statement(s). <br>

                  4 switch statement -
                  A switch statement allows a variable to be tested for equality against a list of values. <br>

                  5 nested switch statements -
                  You can use one switch statement inside another switch statement(s).

                  <h4>The ? : Operators</h4>We have covered conditional operator ? : in the previous chapter which can be used to replace if...else statements. It has the following general form − <br>
                  Exp1 ? Exp2 : Exp3; <br>
                  Where Exp1, Exp2, and Exp3 are expressions. Notice the use and placement of the colon. <br>

                  The value of a ? expression is determined like this − <br>

                  Exp1 is evaluated. If it is true, then Exp2 is evaluated and becomes the value of the entire ? expression. <br>

                  If Exp1 is false, then Exp3 is evaluated and its value becomes the value of the expression.
                  <center>
                     <h3> C - Loops</h3>
                  </center>You may encounter situations, when a block of code needs to be executed several number of times. In general, statements are executed sequentially: The first statement in a function is executed first, followed by the second, and so on. <br>
                  Programming languages provide various control structures that allow for more complicated execution paths. <br>
                  A loop statement allows us to execute a statement or group of statements multiple times. Given below is the general form of a loop statement in most of the programming languages − <br>
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\loop.png"> <br>
                  C programming language provides the following types of loops to handle looping requirements. <br> <br>

                  1 while loop-
                  Repeats a statement or group of statements while a given condition is true. It tests the condition before executing the loop body. <br>

                  2 for loop-
                  Executes a sequence of statements multiple times and abbreviates the code that manages the loop variable. <br>

                  3 do...while loop-
                  It is more like a while statement, except that it tests the condition at the end of the loop body. <br>

                  4 nested loops-
                  You can use one or more loops inside any other while, for, or do..while loop. <br>

                  <h4>Loop Control Statements</h4>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic objects that were created in that scope are destroyed. <br>

                  C supports the following control statements. <br>
                  1 break statement
                  Terminates the loop or switch statement and transfers execution to the statement immediately following the loop or switch. <br>

                  2 continue statement
                  Causes the loop to skip the remainder of its body and immediately retest its condition prior to reiterating. <br>

                  3 goto statement
                  Transfers control to the labeled statement. <br>
                  <center>
                     <h3>C - Functions</h3>
                  </center>
                  *A function is a group of statements that together perform a task. Every C program has at least one function, which is main(), and all the most trivial programs can define additional functions. <br>

                  *You can divide up your code into separate functions. How you divide up your code among different functions is up to you, but logically the division is such that each function performs a specific task. <br>

                  *A function declaration tells the compiler about a function's name, return type, and parameters. A function definition provides the actual body of the function. <br>

                  *The C standard library provides numerous built-in functions that your program can call. For example, strcat() to concatenate two strings, memcpy() to copy one memory location to another location, and many more functions. <br>

                  *A function can also be referred as a method or a sub-routine or a procedure, etc. <br>
                  <h4>Defining a Function</h4>The general form of a function definition in C programming language is as follows <br>
                  <pre>
return_type function_name( parameter list ) {
   body of the function
}
</pre>
                  A function definition in C programming consists of a function header and a function body. Here are all the parts of a function − <br>

                  Return Type − A function may return a value. The return_type is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword void. <br>

                  Function Name − This is the actual name of the function. The function name and the parameter list together constitute the function signature. <br>

                  Parameters − A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. This value is referred to as actual parameter or argument. The parameter list refers to the type, order, and number of the parameters of a function. Parameters are optional; that is, a function may contain no parameters. <br>

                  Function Body − The function body contains a collection of statements that define what the function does. <br>
                  <h4>Function Declarations</h4>A function declaration tells the compiler about a function name and how to call the function. The actual body of the function can be defined separately. <br>
                  Function declaration is required when you define a function in one source file and you call that function in another file. In such case, you should declare the function at the top of the file calling the function.

                  <h4>Calling a Function</h4> While creating a C function, you give a definition of what the function has to do. To use a function, you will have to call that function to perform the defined task.

                  When a program calls a function, the program control is transferred to the called function. A called function performs a defined task and when its return statement is executed or when its function-ending closing brace is reached, it returns the program control back to the main program
                  <pre>
#include <stdio.h>
 
/* function declaration */
int max(int num1, int num2);
 
int main () {

   /* local variable definition */
   int a = 100;
   int b = 200;
   int ret;
 
   /* calling a function to get max value */
   ret = max(a, b);
 
   printf( "Max value is : %d\n", ret );
 
   return 0;
}
 
/* function returning the max between two numbers */
int max(int num1, int num2) {

   /* local variable declaration */
   int result;
 
   if (num1 > num2)
      result = num1;
   else
      result = num2;
 
   return result; 
}
</pre>
                  <h4>Function Arguments</h4>If a function is to use arguments, it must declare variables that accept the values of the arguments. These variables are called the formal parameters of the function.

                  Formal parameters behave like other local variables inside the function and are created upon entry into the function and destroyed upon exit. <br>

                  While calling a function, there are two ways in which arguments can be passed to a function <br> <br>
                  1 Call by value
                  This method copies the actual value of an argument into the formal parameter of the function. In this case, changes made to the parameter inside the function have no effect on the argument. <br>

                  2 Call by reference
                  This method copies the address of an argument into the formal parameter. Inside the function, the address is used to access the actual argument used in the call. This means that changes made to the parameter affect the argument. <br>
                  <center>
                     <h3>C - Scope Rules</h3>
                  </center>A scope in any programming is a region of the program where a defined variable can have its existence and beyond that variable it cannot be accessed. There are three places where variables can be declared in C programming language − <br>

                  Inside a function or a block which is called local variables. <br>

                  Outside of all functions which is called global variables. <br>

                  In the definition of function parameters which are called formal parameters. <br>

                  <h4>Local Variables</h4>Variables that are declared inside a function or block are called local variables. They can be used only by statements that are inside that function or block of code. Local variables are not known to functions outside their own. The following example shows how local variables are used. Here all the variables a, b, and c are local to main() function
                  <pre>
#include <stdio.h>
 
int main () {

  /* local variable declaration */
  int a, b;
  int c;
 
  /* actual initialization */
  a = 10;
  b = 20;
  c = a + b;
 
  printf ("value of a = %d, b = %d and c = %d\n", a, b, c);
 
  return 0;
}

</pre>
                  <h4>Global Variables</h4>Global variables are defined outside a function, usually on top of the program. Global variables hold their values throughout the lifetime of your program and they can be accessed inside any of the functions defined for the program.
                  <pre>
#include <stdio.h>
 
/* global variable declaration */
int g;
 
int main () {

  /* local variable declaration */
  int a, b;
 
  /* actual initialization */
  a = 10;
  b = 20;
  g = a + b;
 
  printf ("value of a = %d, b = %d and g = %d\n", a, b, g);
 
  return 0;
}
</pre>
                  <center>
                     <h3>C - Arrays</h3>
                  </center>Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.
                  <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\array.png"> <br>
                  <h4>Declaring Arrays</h4>To declare an array in C, a programmer specifies the type of the elements and the number of elements required by an array as follows −
                  <br> <br>
                  type arrayName [ arraySize ]; <br>
                  This is called a single-dimensional array. The arraySize must be an integer constant greater than zero and type can be any valid C data type. For example, to declare a 10-element array called balance of type double, use this statement − <br>
                  double balance[10]; <br>
                  <h4>Initializing Arrays </h4>You can initialize an array in C either one by one or using a single statement as follows − <br>

                  double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0}; <br>
                  If you omit the size of the array, an array just big enough to hold the initialization is created. Therefore, if you write − <br>
                  double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0}; <br>
                  <h4>Accessing Array Elements </h4>n element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. For example − <br>

                  double salary = balance[9]; <br>
                  The above statement will take the 10th element from the array and assign the value to salary variable. <br>
                  Example of declaration, assignment, and accessing arrays <br>
                  <pre>
#include <stdio.h>
 
int main () {

   int n[ 10 ]; /* n is an array of 10 integers */
   int i,j;
 
   /* initialize elements of array n to 0 */         
   for ( i = 0; i < 10; i++ ) {
      n[ i ] = i + 100; /* set element at location i to i + 100 */
   }
   
   /* output each array element's value */
   for (j = 0; j < 10; j++ ) {
      printf("Element[%d] = %d\n", j, n[j] );
   }
 
   return 0;
}
</pre>
                  <center>
                     <h3>C - Pointers</h3>
                  </center>A pointer is a variable whose value is the address of another variable, i.e., direct address of the memory location. Like any variable or constant, you must declare a pointer before using it to store any variable address. The general form of a pointer variable declaration is − <br>
                  <pre>
#include <stdio.h>

int main () {

   int  var1;
   char var2[10];

   printf("Address of var1 variable: %x\n", &var1  );
   printf("Address of var2 variable: %x\n", &var2  );

   return 0;
}
</pre>
                  When the above code is compiled and executed, it produces the following result − <br>

                  Address of var1 variable: bff5a400 <br>
                  Address of var2 variable: bff5a3f6 <br>
                  <h4>NULL Pointers</h4> It is always a good practice to assign a NULL value to a pointer variable in case you do not have an exact address to be assigned. This is done at the time of variable declaration. A pointer that is assigned NULL is called a null pointer. <br>

                  The NULL pointer is a constant with a value of zero defined in several standard libraries. Consider the following program −
                  <pre>
#include <stdio.h>

int main () {

   int  *ptr = NULL;

   printf("The value of ptr is : %x\n", ptr  );
 
   return 0;
}


When the above code is compiled and executed, it produces the following result −
The value of ptr is 0
</pre>
                  <center>
                     <h3>C - Strings</h3>
                  </center>
                  Strings are actually one-dimensional array of characters terminated by a null character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a null. <br>

                  The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello." <br>
                  <b>char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};</b>
                  If you follow the rule of array initialization then you can write the above statement as follows −
                  <b>char greeting[] = "Hello"; </b>
                  <pre>
#include <stdio.h>

int main () {

   char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
   printf("Greeting message: %s\n", greeting );
   return 0;
}

Greeting message: Hello
</pre>
                  C supports a wide range of functions that manipulate null-terminated strings − <br>
                  1
                  strcpy(s1, s2);

                  Copies string s2 into string s1. <br>

                  2
                  strcat(s1, s2);

                  Concatenates string s2 onto the end of string s1. <br>

                  3
                  strlen(s1);

                  Returns the length of string s1. <br>

                  4
                  strcmp(s1, s2);

                  Returns 0 if s1 and s2 are the same; less than 0 if s1<s2; greater than 0 if s1>s2. <br>

                     5
                     strchr(s1, ch);

                     Returns a pointer to the first occurrence of character ch in string s1. <br>

                     6
                     strstr(s1, s2);

                     Returns a pointer to the first occurrence of string s2 in string s1. <br> <br>
                     The following example uses some of the above-mentioned functions −
                     <pre>
#include <stdio.h>
#include <string.h>

int main () {

   char str1[12] = "Hello";
   char str2[12] = "World";
   char str3[12];
   int  len ;

   /* copy str1 into str3 */
   strcpy(str3, str1);
   printf("strcpy( str3, str1) :  %s\n", str3 );

   /* concatenates str1 and str2 */
   strcat( str1, str2);
   printf("strcat( str1, str2):   %s\n", str1 );

   /* total lenghth of str1 after concatenation */
   len = strlen(str1);
   printf("strlen(str1) :  %d\n", len );

   return 0;
}
</pre>
                     When the above code is compiled and executed, it produces the following result −
                     <pre>
strcpy( str3, str1) :  Hello
strcat( str1, str2):   HelloWorld
strlen(str1) :  10
</pre>
                     <center>
                        <h3>C - Structures</h3>
                     </center>
                     Arrays allow to define type of variables that can hold several data items of the same kind. Similarly structure is another user defined data type available in C that allows to combine data items of different kinds. <br>

                     Structures are used to represent a record. Suppose you want to keep track of your books in a library. You might want to track the following attributes about each book − <br>
                     Title <br>
                     Author <br>
                     Subject <br>
                     Book ID <br>
                     <h4>Defining a Structure</h4>To define a structure, you must use the struct statement. The struct statement defines a new data type, with more than one member. The format of the struct statement is as follows −
                     <pre>
struct [structure tag] {

   member definition;
   member definition;
   ...
   member definition;
} [one or more structure variables]; 
</pre>
                     <h4>Structures as Function Arguments</h4>You can pass a structure as a function argument in the same way as you pass any other variable or pointer.
                     <pre>
#include <stdio.h>
#include <string.h>
 
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books book );

int main( ) {

   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info */
   printBook( Book1 );

   /* Print Book2 info */
   printBook( Book2 );

   return 0;
}

void printBook( struct Books book ) {

   printf( "Book title : %s\n", book.title);
   printf( "Book author : %s\n", book.author);
   printf( "Book subject : %s\n", book.subject);
   printf( "Book book_id : %d\n", book.book_id);
}
</pre>
                     When the above code is compiled and executed, it produces the following result
                     <pre>
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
                     <h4>Pointers to Structures</h4>
                     You can define pointers to structures in the same way as you define pointer to any other variable
                     <pre>
#include <stdio.h>
#include <string.h>
 
struct Books {
   char  title[50];
   char  author[50];
   char  subject[100];
   int   book_id;
};

/* function declaration */
void printBook( struct Books *book );
int main( ) {

   struct Books Book1;        /* Declare Book1 of type Book */
   struct Books Book2;        /* Declare Book2 of type Book */
 
   /* book 1 specification */
   strcpy( Book1.title, "C Programming");
   strcpy( Book1.author, "Nuha Ali"); 
   strcpy( Book1.subject, "C Programming Tutorial");
   Book1.book_id = 6495407;

   /* book 2 specification */
   strcpy( Book2.title, "Telecom Billing");
   strcpy( Book2.author, "Zara Ali");
   strcpy( Book2.subject, "Telecom Billing Tutorial");
   Book2.book_id = 6495700;
 
   /* print Book1 info by passing address of Book1 */
   printBook( &Book1 );

   /* print Book2 info by passing address of Book2 */
   printBook( &Book2 );

   return 0;
}

void printBook( struct Books *book ) {

   printf( "Book title : %s\n", book->title);
   printf( "Book author : %s\n", book->author);
   printf( "Book subject : %s\n", book->subject);
   printf( "Book book_id : %d\n", book->book_id);
}
</pre>When the above code is compiled and executed, it produces the following result −
                     <pre>
Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
                     <center>
                        <h3>C - Unions</h3>
                     </center>A union is a special data type available in C that allows to store different data types in the same memory location. You can define a union with many members, but only one member can contain a value at any given time. Unions provide an efficient way of using the same memory location for multiple-purpose
                     <h4>Defining a Union</h4>To define a union, you must use the union statement in the same way as you did while defining a structure. The union statement defines a new data type with more than one member for your program. The format of the union statement is as follows −
                     <pre>
union [union tag] {
   member definition;
   member definition;
   ...
   member definition;
} [one or more union variables];  
</pre>
                     The memory occupied by a union will be large enough to hold the largest member of the union. For example, in the above example, Data type will occupy 20 bytes of memory space because this is the maximum space which can be occupied by a character string. The following example displays the total memory size occupied by the above union −
                     <pre>
#include <stdio.h>
#include <string.h>
 
union Data {
   int i;
   float f;
   char str[20];
};
 
int main( ) {

   union Data data;        

   printf( "Memory size occupied by data : %d\n", sizeof(data));

   return 0;
}


When the above code is compiled and executed, it produces the following result −

Memory size occupied by data : 20
</pre>
                     <center>
                        <h3>C - Input and Output</h3>
                     </center>When we say Input, it means to feed some data into a program. An input can be given in the form of a file or from the command line. C programming provides a set of built-in functions to read the given input and feed it to the program as per requirement. <br>

                     When we say Output, it means to display some data on screen, printer, or in any file. C programming provides a set of built-in functions to output the data on the computer screen as well as to save it in text or binary files.
                     <h4>The Standard Files</h4>C programming treats all the devices as files. So devices such as the display are addressed in the same way as files and the following three files are automatically opened when a program executes to provide access to the keyboard and screen. <br>
                     <pre>
  Standard File	 File Pointer  	Device
  Standard input	stdin	  Keyboard
  Standard output	stdout	  Screen
  Standard error	stderr	  Your screen
</pre>
                     <h4>The getchar() and putchar() Functions</h4>The int getchar(void) function reads the next available character from the screen and returns it as an integer. This function reads only single character at a time. You can use this method in the loop in case you want to read more than one character from the screen. <br>

                     The int putchar(int c) function puts the passed character on the screen and returns the same character. This function puts only single character at a time. You can use this method in the loop in case you want to display more than one character on the screen. Check the following example −
                     <pre>
#include <stdio.h>
int main( ) {

   int c;

   printf( "Enter a value :");
   c = getchar( );

   printf( "\nYou entered: ");
   putchar( c );

   return 0;
}

</pre>

                     <h4>The gets() and puts() Functions</h4>The char *gets(char *s) function reads a line from stdin into the buffer pointed to by s until either a terminating newline or EOF (End of File).

                     The int puts(const char *s) function writes the string 's' and 'a' trailing newline to stdout.

                     NOTE: Though it has been deprecated to use gets() function, Instead of using gets, you want to use fgets().
                     <pre>
#include <stdio.h>
int main( ) {

   char str[100];

   printf( "Enter a value :");
   gets( str );

   printf( "\nYou entered: ");
   puts( str );

   return 0;
}
</pre>
                     <h4>The scanf() and printf() Functions</h4>The int scanf(const char *format, ...) function reads the input from the standard input stream stdin and scans that input according to the format provided. <br>

                     The int printf(const char *format, ...) function writes the output to the standard output stream stdout and produces the output according to the format provided.
                     <pre>
#include <stdio.h>
int main( ) {

   char str[100];
   int i;

   printf( "Enter a value :");
   scanf("%s %d", str, &i);

   printf( "\nYou entered: %s %d ", str, i);

   return 0;
}
</pre>
                     <center>
                        <h3>C - File I/O</h3>
                     </center>
                     The last chapter explained the standard input and output devices handled by C programming language. This chapter cover how C programmers can create, open, close text or binary files for their data storage. <br>

                     A file represents a sequence of bytes, regardless of it being a text file or a binary file. C programming language provides access on high level functions as well as low level (OS level) calls to handle file on your storage devices. This chapter will take you through the important calls for file management.
                     <h4>Opening Files</h4>You can use the fopen( ) function to create a new file or to open an existing file. This call will initialize an object of the type FILE, which contains all the information necessary to control the stream. The prototype of this function call is as follows −
                     <pre>FILE *fopen( const char * filename, const char * mode );</pre>
                     Here, filename is a string literal, which you will use to name your file, and access mode can have one of the following values − <br>
                     1
                     r -

                     Opens an existing text file for reading purpose. <br>

                     2
                     w -

                     Opens a text file for writing. If it does not exist, then a new file is created. Here your program will start writing content from the beginning of the file. <br>

                     3
                     a -

                     Opens a text file for writing in appending mode. If it does not exist, then a new file is created. Here your program will start appending content in the existing file content. <br>

                     4
                     r+ -

                     Opens a text file for both reading and writing. <br>

                     5
                     w+ -

                     Opens a text file for both reading and writing. It first truncates the file to zero length if it exists, otherwise creates a file if it does not exist. <br>

                     6
                     a+ -

                     Opens a text file for both reading and writing. It creates the file if it does not exist. The reading will start from the beginning but writing can only be appended. <br>

                     <h4>Closing a File </h4> To close a file, use the fclose( ) function. The prototype of this function is <br> int fclose( FILE *fp );
                     <h4>Writing a File</h4>Following is the simplest function to write individual characters to a stream − <br>

                     int fputc( int c, FILE *fp );
                     <h4>Reading a File</h4>Given below is the simplest function to read a single character from a file − <br>

                     int fgetc( FILE * fp );
                     <pre>
   EXAMPLE
#include <stdio.h>

main() {

   FILE *fp;
   char buff[255];

   fp = fopen("/tmp/test.txt", "r");
   fscanf(fp, "%s", buff);
   printf("1 : %s\n", buff );

   fgets(buff, 255, (FILE*)fp);
   printf("2: %s\n", buff );
   
   fgets(buff, 255, (FILE*)fp);
   printf("3: %s\n", buff );
   fclose(fp);

}
 </pre>
                     <center>
                        <h3>C - Type Casting</h3>
                     </center>onverting one datatype into another is known as type casting or, type-conversion. For example, if you want to store a 'long' value into a simple integer then you can type cast 'long' to 'int'. You can convert the values from one type to another explicitly using the cast operator as follows − <br>
                     (type_name) expression <br>
                     Consider the following example where the cast operator causes the division of one integer variable by another to be performed as a floating-point operation −
                     <pre>
#include <stdio.h>

main() {

   int sum = 17, count = 5;
   double mean;

   mean = (double) sum / count;
   printf("Value of mean : %f\n", mean );
}

</pre>
                     When the above code is compiled and executed, it produces the following result −<br>

                     Value of mean : 3.400000 <br>
                     it should be noted here that the cast operator has precedence over division, so the value of sum is first converted to type double and finally it gets divided by count yielding a double value. <br>

                     Type conversions can be implicit which is performed by the compiler automatically, or it can be specified explicitly through the use of the cast operator. It is considered good programming practice to use the cast operator whenever type conversions are necessary.
                     <h4>Integer Promotion</h4>Integer promotion is the process by which values of integer type "smaller" than int or unsigned int are converted either to int or unsigned int. Consider an example of adding a character with an integer − <br>
                     <pre>
#include <stdio.h>

main() {

   int  i = 17;
   char c = 'c'; /* ascii value is 99 */
   int sum;

   sum = i + c;
   printf("Value of sum : %d\n", sum );
}

Value of sum : 116
</pre>
                     <h4>Usual Arithmetic Conversion</h4>The usual arithmetic conversions are implicitly performed to cast their values to a common type. The compiler first performs integer promotion; if the operands still have different types, then they are converted to the type that appears highest in the following hierarchy − <br>
                     <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C\casting.png">
                     <center>
                        <h3>C - Error Handling</h3>
                     </center>As such, C programming does not provide direct support for error handling but being a system programming language, it provides you access at lower level in the form of return values. Most of the C or even Unix function calls return -1 or NULL in case of any error and set an error code errno. It is set as a global variable and indicates an error occurred during any function call. You can find various error codes defined in <error.h> header file. <br>

                        So a C programmer can check the returned values and can take appropriate action depending on the return value. It is a good practice, to set errno to 0 at the time of initializing a program. A value of 0 indicates that there is no error in the program. <br>
                        <h4>Divide by Zero Errors</h4>It is a common problem that at the time of dividing any number, programmers do not check if a divisor is zero and finally it creates a runtime error. <br>

                        The code below fixes this by checking if the divisor is zero before dividing − <br>
                        <pre>
#include <stdio.h>
#include <stdlib.h>

main() {

   int dividend = 20;
   int divisor = 0;
   int quotient;
 
   if( divisor == 0){
      fprintf(stderr, "Division by zero! Exiting...\n");
      exit(-1);
   }
   
   quotient = dividend / divisor;
   fprintf(stderr, "Value of quotient : %d\n", quotient );

   exit(0);
}
Division by zero! Exiting...
</pre>
                        <h4>Program Exit Status</h4>It is a common practice to exit with a value of EXIT_SUCCESS in case of program coming out after a successful operation. Here, EXIT_SUCCESS is a macro and it is defined as 0. <br>

                        If you have an error condition in your program and you are coming out then you should exit with a status EXIT_FAILURE which is defined as -1. So let's write above program as follows −
                        <pre>
#include <stdio.h>
#include <stdlib.h>

main() {

   int dividend = 20;
   int divisor = 5;
   int quotient;
 
   if( divisor == 0) {
      fprintf(stderr, "Division by zero! Exiting...\n");
      exit(EXIT_FAILURE);
   }
	
   quotient = dividend / divisor;
   fprintf(stderr, "Value of quotient : %d\n", quotient );

   exit(EXIT_SUCCESS);
}


When the above code is compiled and executed, it produces the following result −
Value of quotient : 4
</pre>
                        <center>
                           <h3>C - Recursion</h3>
                        </center>Recursion is the process of repeating items in a self-similar way. In programming languages, if a program allows you to call a function inside the same function, then it is called a recursive call of the function. <br>
                        <pre>
void recursion() {
   recursion(); /* function calls itself */
}

int main() {
   recursion();
}
</pre>
                        The C programming language supports recursion, i.e., a function to call itself. But while using recursion, programmers need to be careful to define an exit condition from the function, otherwise it will go into an infinite loop. <br>

                        Recursive functions are very useful to solve many mathematical problems, such as calculating the factorial of a number, generating Fibonacci series, etc. <br>
                        The following example calculates the factorial of a given number using a recursive function − <br>
                        <pre>
#include <stdio.h>

unsigned long long int factorial(unsigned int i) {

   if(i <= 1) {
      return 1;
   }
   return i * factorial(i - 1);
}

int  main() {
   int i = 12;
   printf("Factorial of %d is %d\n", i, factorial(i));
   return 0;
}


When the above code is compiled and executed, it produces the following result −
Factorial of 12 is 479001600
</pre>
                        The following example generates the Fibonacci series for a given number using a recursive function
                        <pre>
#include <stdio.h>

int fibonacci(int i) {

   if(i == 0) {
      return 0;
   }
	
   if(i == 1) {
      return 1;
   }
   return fibonacci(i-1) + fibonacci(i-2);
}

int  main() {

   int i;
	
   for (i = 0; i < 10; i++) {
      printf("%d\t\n", fibonacci(i));
   }
	
   return 0;
}
</pre>
                        <center>
                           <h3>C - Variable Arguments</h3>
                        </center>
                        Sometimes, you may come across a situation, when you want to have a function, which can take variable number of arguments, i.e., parameters, instead of predefined number of parameters. The C programming language provides a solution for this situation and you are allowed to define a function which can accept variable number of parameters based on your requirement. The following example shows the definition of such a function. <br>
                        <pre>
int func(int, ... ) {
   .
   .
   .
}

int main() {
   func(1, 2, 3);
   func(1, 2, 3, 4);
}
</pre>
                        To use such functionality, you need to make use of stdarg.h header file which provides the functions and macros to implement the functionality of variable arguments and follow the given steps − <br>
                        Define a function with its last parameter as ellipses and the one just before the ellipses is always an int which will represent the number of arguments. <br>

                        Create a va_list type variable in the function definition. This type is defined in stdarg.h header file. <br>

                        Use int parameter and va_start macro to initialize the va_list variable to an argument list. The macro va_start is defined in stdarg.h header file. <br>

                        Use va_arg macro and va_list variable to access each item in argument list. <br>

                        Use a macro va_end to clean up the memory assigned to va_list variable. <br>
                        Now let us follow the above steps and write down a simple function which can take the variable number of parameters and return their average −
                        <pre>
#include <stdio.h>
#include <stdarg.h>

double average(int num,...) {

   va_list valist;
   double sum = 0.0;
   int i;

   /* initialize valist for num number of arguments */
   va_start(valist, num);

   /* access all the arguments assigned to valist */
   for (i = 0; i < num; i++) {
      sum += va_arg(valist, int);
   }
	
   /* clean memory reserved for valist */
   va_end(valist);

   return sum/num;
}

int main() {
   printf("Average of 2, 3, 4, 5 = %f\n", average(4, 2,3,4,5));
   printf("Average of 5, 10, 15 = %f\n", average(3, 5,10,15));
}

Average of 2, 3, 4, 5 = 3.500000
Average of 5, 10, 15 = 10.000000
</pre>
                        <center>
                           <h3>C - Memory Management</h3>
                        </center> explains dynamic memory management in C. The C programming language provides several functions for memory allocation and management. These functions can be found in the <stdlib.h> header file. <br>

                           1 -
                           void *calloc(int num, int size);

                           This function allocates an array of num elements each of which size in bytes will be size. <br>

                           2 -
                           void free(void *address);

                           This function releases a block of memory block specified by address. <br>

                           3 -
                           void *malloc(size_t size);

                           This function allocates an array of num bytes and leave them uninitialized. <br>

                           4 -
                           void *realloc(void *address, int newsize);

                           This function re-allocates memory extending it upto newsize. <br>
                           <h4>Allocating Memory Dynamically</h4>While programming, if you are aware of the size of an array, then it is easy and you can define it as an array. For example, to store a name of any person, it can go up to a maximum of 100 characters, so you can define something as follows − <br>

                           char name[100];
                           <pre>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {

   char name[100];
   char *description;

   strcpy(name, "Zara Ali");

   /* allocate memory dynamically */
   description = malloc( 200 * sizeof(char) );
	
   if( description == NULL ) {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   } else {
      strcpy( description, "Zara ali a DPS student in class 10th");
   }
   
   printf("Name = %s\n", name );
   printf("Description: %s\n", description );
}


When the above code is compiled and executed, it produces the following result
Name = Zara Ali
Description: Zara ali a DPS student in class 10th
</pre>

                           Same program can be written using calloc(); only thing is you need to replace malloc with calloc as follows − <br>

                           calloc(200, sizeof(char));
                           <h4>Resizing and Releasing Memory</h4>When your program comes out, operating system automatically release all the memory allocated by your program but as a good practice when you are not in need of memory anymore then you should release that memory by calling the function free(). <br> <br>

                           Alternatively, you can increase or decrease the size of an allocated memory block by calling the function realloc(). Let us check the above program once again and make use of realloc() and free() functions −
                           <pre>
  #include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main() {

   char name[100];
   char *description;

   strcpy(name, "Zara Ali");

   /* allocate memory dynamically */
   description = malloc( 30 * sizeof(char) );
	
   if( description == NULL ) {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   } else {
      strcpy( description, "Zara ali a DPS student.");
   }
	
   /* suppose you want to store bigger description */
   description = realloc( description, 100 * sizeof(char) );
	
   if( description == NULL ) {
      fprintf(stderr, "Error - unable to allocate required memory\n");
   } else {
      strcat( description, "She is in class 10th");
   }
   
   printf("Name = %s\n", name );
   printf("Description: %s\n", description );

   /* release memory using free() function */
   free(description);
}


When the above code is compiled and executed, it produces the following result.
Name = Zara Ali
Description: Zara ali a DPS student.She is in class 10th
 </pre>
                           <center>
                              <h3>C - Command Line Arguments</h3>
                           </center>It is possible to pass some values from the command line to your C programs when they are executed. These values are called command line arguments and many times they are important for your program especially when you want to control your program from outside instead of hard coding those values inside the code. <br>

                           The command line arguments are handled using main() function arguments where argc refers to the number of arguments passed, and argv[] is a pointer array which points to each argument passed to the program. Following is a simple example which checks if there is any argument supplied from the command line and take action accordingly − <br>
                           <pre>
#include <stdio.h>

int main( int argc, char *argv[] )  {

   if( argc == 2 ) {
      printf("The argument supplied is %s\n", argv[1]);
   }
   else if( argc > 2 ) {
      printf("Too many arguments supplied.\n");
   }
   else {
      printf("One argument expected.\n");
   }
}

</pre>
                           When the above code is compiled and executed with single argument, it produces the following result. <br><br>

                           $./a.out testing <br>
                           The argument supplied is testing
                           When the above code is compiled and executed with a two arguments, it produces the following result.<br><br>

                           $./a.out testing1 testing2<br>
                           Too many arguments supplied.
                           When the above code is compiled and executed without passing any argument, it produces the following result.<br><br>

                           $./a.out<br>
                           One argument expected<br>
























      </p>

   </div>

  