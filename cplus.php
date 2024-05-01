<?php include "notes.php"; ?>
<div class="main">
  <center><h2>C++ Tutorial</h2></center>
<p> <b><h3>Difference between Procedural and object oriented Programming</h3></b>
    <b>Procedure Oriented
        Programming</b>  <br>
    • A program in a procedural language is a list of
    instruction where each statement tells the
    computer to do something. It focuses on
    procedure (function) & algorithm is needed to
    perform the derived computation.  <br>
    • It means “a set of procedures” which is a “set of
    subroutines” or a “set of functions“. <br>
    • Functions are called repeatedly in a program to execute
    tasks performed by them. <br>
    For example: <br>
    • a program may involve collecting data from
    user (reading), <br>
    • performing some kind of calculations on the
    collected data (calculation), <br>
    • and finally displaying the result to the user
    when requested (printing) <br>
    • All the 3 tasks of reading, calculating and
    printing can be written in a program with the
    help of 3 different functions which performs
    these 3 different tasks. <br>
    



   <h4> A RealWorld Example</h4>
• Let's say that you are working for a vehicle parts
manufacturer that needs to update it's online inventory
system. Your boss tells you to program two similar but
separate forms for a website, one form that processes
information about cars and one that does the same for
trucks.  <br>
• For cars, we will need to record the following information:
Color, Engine Size, Transmission Type, Number of doors
• For trucks, the information will be similar, but slightly
different. We need: <br>
Color, Engine Size, Transmission Type, Cab Size, Towing
Capacity
<h4>Scenario 1 </h4>
• Suppose that we suddenly need to add a bus
form, that records the following information:
Color, Engine Size, Transmission Type
Number of passengers <br>
• Procedural: We need to recreate the entire form,
repeating the code for Color, Engine Size, and
Transmission Type. <br>
• OOP: We simply extend the vehicle class with a
bus class and add the <br>
method,numberOfPassengers.
<h4>Scenario 2</h4>
• Instead of storing color in a database like we
previously did, for some strange reason our client
wants the color emailed to him. <br>
• Procedural: We change three different forms:
cars, trucks, and buses to email the color to the
client rather than storing it in the database. <br>
• OOP: We change the color method in the vehicle
class and because the car, truck, and bus classes
all extend (or inherit from, to put it another way)
the vehicle class, they are automatically updated.
 <h4>Scenario 3</h4>
• We want to move from a generic car to specific
makes, for example: Nissan and Mazda. <br>
• Procedural: We create a new form for each make,
repeating all of the code for generic car
information and adding the code specific to each
make. <br>
• OOP: We extend the car class with a Nissan class
and a Mazda class and add methods for each set
of unique information for that car make.
 <h4>Scenario 4</h4>
• We found a bug in the transmission type area
of our form and need to fix it. <br>
• Procedural: We open and update each form. <br>
• OOP: We fix the transmission Type method in
the vehicle class and the change perpetuates
in every class that inherits from it. <br> <br> <br>

<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\p vs op.png" ><br> 
<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\op vs po.png"> <br>
<h4>Object Oriented Methodology </h4>
• It is a certain process through which software
can be developed. <br>
• The goals of this methodology are to achieve
Software Systems that are reliable, reusable,
extensible; hence, more useful in the long run. <br>
• The methodology achieves its goals by the help
of a collection of objects that communicate by
exchanging messages. <br>
 <center><h3>Classes</h3></center> 
• Exercise: What class/category do these objects
belong to? <br>
– Pencils, erasers, pens, rulers, sharpeners? <br>
– Bananas, apples, oranges, peaches, grapes? <br>
– Alice, Bob, Mark, Fahd, Ali, Brian? <br>
• Guideline: A class usually represents a noun <br>
<h4>Class</h4>
• The building block of C++ that leads to Object
Oriented programming is a Class. <br>
• It is a user defined data type, which holds its
own data members and member functions,
which can be accessed and used by creating
an instance of that class. <b></b>
• A class is like a blueprint for an object. <br>
• For Example: Consider the Class of Cars. <br>
• There may be many cars with different names
and brand but all of them will share some
common properties like all of them will have 4
wheels, Speed Limit, Mileage range etc. <br>
• So here, Car is the class and wheels, speed
limits, mileage are their properties. <br>
<h4>Object</h4> <br>
• An Object is an instance of a Class. <br>
• When a class is defined, no memory is
allocated but when it is instantiated (i.e. an
object is created) memory is allocated <br> <br>
<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\oops.png">
 <h4>Encapsulation</h4>
*The wrapping up of data and functions into a single
unit is known as Encapsulation <br>
*The data is not accessible to the outside world and
only those functions which are wrapped in the class
can access it.<br>
*This insulation of the data from direct access by the
program is called data hiding or information
hiding.<br>
<h4>Data Abstraction</h4>
*Abstraction refers to the act of representing essential
features without including the background details or
explanations.<br>
*Classes use the concept of abstraction and are
defined as a list of abstract attributes such as size,
weight and cost, and functions to operate on these
functions.<br>
• Since the classes use the concept of data
abstraction, they are known as Abstract Data
Types.<br>
<h4>Inheritance</h4>
• Inheritance is the process by which objects of one class
acquire the properties of objects of another class.<br>
*The principle behind this sort of division is that each derived
class shares common characteristics with the class from
which it is derived.<br>
*In OOP the concept of inheritance provides the idea
of reusability.<br>
*This means that we can add additional features to an
existing class without modifying it.
Inheritance<br>
*The real power of inheritance mechanism is that it
allows the programmer to reuse a class that is almost
but not exactly, what he wants, and to tailor the class
in such a way that it does not introduce any
undesirable side-effects into the rest of the classes. <br>
<pre>         Bird
Flying Bird    No flying Bird</pre> 
<h4>Polymorphism</h4>
*Polymorphism means the ability to take more than one
form.<br>
*That is an operation may exhibit different behaviours
in different instances. The behaviour depends upon
the types of data used in the operation.<br>
*Example: Operation of addition.<br>
*For two numbers the operation will generate a sum. If
the operands are strings, then the operation would
produce a third string by concatenation.<br>

*The process of making an operator to exhibit different
behaviours in different instances is known as
operator overloading.<br>
*Using a single function name to perform different types
of taks is known as function overloading.<br>
 <center><h3>Dynamic Binding</h3></center>
* Binding refers to the linking of a procedure call to the
code to be executed in response to the call. <br>
* Dynamic binding means that the code associated with
a given procedure call is not known until the time of
the call at run-time <br>
* It is associated with polymorphism and
inheritance. <br>
<center><h3>Message Passing</h3></center>
* An object-oriented program consits of a set of objects
that communicate with each other. <br>
* Object communicate with one another by sending and
receiving information much the same way as people
pass message to one another. <br>
* Message passing involves specifying the name of the
object, the name of the funciton (message) and the
information to be sent. <br>

<center><h3>Benefits of OOP</h3></center>
* Through inheritance we can elimate the redundant code and
extend the use of existing code <br>
* Data hiding helps the programmer to build secure programs that
cannot be invaded by code in other parts of the program <br>
* It is possible to have mulitple instances of an objects to co-exist
without any interference. <br>
* It is possible to map objects in the problem domain to those
objects in the program <br>
* Easy to partition the work in a project based on objects <br>
* Data-centred design approach enables us to capture
more details of a model in implementable form <br>
* Object-oriented systems can be easily upgraded from
small to large systems <br>
* Software complexity can be easily managed. <br>

<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\hello.png" > <br> <br>
<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\structure.png" > <br> <br>
 <h4>Structure of a C+ + Program</h4>
• Programs are a sequence of instructions or
statements. <br>
• These statements form the structure of a C++
program. <br>
• C++ program structure is divided into various
sections, namely, headers, class definition,
member functions definitions and main function <br>
 <center><h3>VARIABLES IN C++</h3></center>
* Variable is a place to store information. <br>
* A variable is a location in your computer’s memory in which you can
store a value and from which you can later retrive the value.<br>
* This is temporary storage,when you turn the computer off these variable
are lost.<br>
* Like c, in c++ all variable must be declare before we used it.<br>
* The diiference is that in c, it requires to be defined at the beginning of a
scope,rather c++ allow you to declaration of variable anywhere in
the scope.<br>
• This means that a variable can be declared right at the place of its first use.<br>
• Declaration Of variable: char name[12];<br>
• int a;<br>
• float num;<br>
• If you are going to declare more than one variable having same data type,
you can declare all of them in single statement by separating their identifiers
with commas.<br>
• For ex:<br>
• int a,b,c;<br>
* At the other-end you can assign value to the variable when you declare them its
called initialization.<br>
* Ex:
int a=0;<br>
char name[]={‘h’,’e’,’l’,’l’,’o’};<br>
char name[8]=‘computer’<br>
<h4> Dynamic initialization:</h4>
The additional feature of c++ is ,to initialize the variable at run time it is called
dynamic initialization.<br>
For example:<br>
int c= a+b;<br>
float avg=sum/n;<br>
 <h4>Reference variable:</h4>
• c++ references allow you to create a second name for the
variable that you can use to read or modify the original data
stored in that variable.<br>
• This means that when you declare a reference and assign it a
variable it will allow you to treat the reference exactly as though it
were the original variable for the purpose of accessing and
modifying the value of the original even if the second
name(reference) is located within the different scope.<br>
• Variable with different name share same data space.<br>
* Syntax:<br>
data_type& ref_name= var_name;<br>
* Ex:<br>
int a;<br>
int& i=a;<br>
 <h4>REFERENCE PROGRAM</h4>
 <pre>
#include<iostream>
using namespace std;
int main()
{
int x[5]={1,2,3,4,5};
int& y=x[2];
cout<< "The Value of y is::" << y;
return 0;
}
 </pre>
 <center><h3>OPERATORS IN C++</h3></center>
 All the operator in c is available in c++,but some
 additional operator that are not in c are: <br>
 <pre>
    << -Insertion operator
    >> -Extraction operator
    :: -Scope resolution operator
    .* -Pointer to member operator
    delete -memory release operator
    endl -line feed operator
    new -memory allocation operator
    setw -field width operator
 </pre>
 <center><h3>Basic Structure Of Class:</h3></center>
 <img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\basic.png" alt="">
 <br>• There are three access modifiers : public, private and protected. <br>
 • A class can have multiple public, protected, or private labeled
 sections..<br>
 • The default access for members and classes is private. <br>
<pre>
// C++ program to
demonstrate
// accessing of data members
#include <bits/stdc++.h>
using namespace std;
class Geeks
{ // Access specifier
public:
// Data Members
string geekname;
// Member
Functions()
void printname()
{
cout << "Geekname is: " << geekname;
}
};
int main() {
// Declare an object of class geeks
Geeks obj1;
// accessing data member
obj1.geekname = "Abhi";
// accessing member function
obj1.printname();
return 0;
}
</pre>


<h4>SCOPE RESOLUTION OPERATOR(::)</h4>
* Basically variable are two types ,local variable and
global variable. <br>
* The variable which are declared within a block or
function, that are used only inside a function is called
local variable.<br>
* The global variable are declared out side function
and used anywhere in the program.<br>
* A situation occurs when both global and local variable name are
same and we have to use global variable inside a local block or
function, then it is only possible by using Scope Resolution
Operator, it is used with global variable.<br>
* Syntax:<br>
::variable_name;<br>
* A major application of the scope resolution operator is in the
classes to identify the class to which a member function
belongs.<br>
 <h5>Scope resolution operator in C++</h5>
• In C++, scope resolution operator is ::.<br>
• It is used for following purposes:<br>
1) To access a global variable when there is a local variable with same
name:<br>
2) To define a function outside a class.<br>
3) To access a class’s static variables<br>

 <h4>1) To access a global variable when there is a local variable with same
    name:</h4>
<pre>
// C++ program to show that we can access a global variable
// using scope resolution operator :: when there is a local
// variable with same name
#include<iostream>
using namespace std;
int x; // Global x
int main()
{
int x = 10; // Local x
cout << "Value of global x is " << ::x;
cout << "\nValue of local x is " << x;
return 0;
}

Output:
Value of global x is 0
Value of local x is 10
</pre>
<h4>To define a function outside a class</h4>
<pre>
// C++ program to show that
scope resolution operator :: is
used
// to define a function outside a
class
#include<iostream>
using namespace std;
class A
{
public:
// Only declaration
void fun();
};
// Definition outside class using ::
void A::fun()
{
cout << "fun() called";
}
int main()
{
A a;
a.fun();
return 0;
}

Output:
fun() called
</pre>
<h4>To access a class’s static variables
</h4>
<pre>
#include<iostream>
using namespace std;
class GfG
{
public:
static int i;
};
int main()
{
GfG obj1;
GfG obj2;
obj1.i =2;
obj2.i = 3;
// prints value of i
cout << obj1.i<<" "<< obj2.i;
}
To access a class’s static variables
Gives Error

</pre>
• Static variable inside a class should be initialized explicitly by the user
using the class name and scope resolution operator outside the class
<center><h3>Call By Value and Call By Reference</h3></center>
• The parameters passed to function are called actual parameters . <br>
• The parameters received by function are called formal parameters.<br>
<h5>• Call By Value:</h5>
In this parameter passing method, values of actual parameters are
copied to function’s formal parameters and the two types of
parameters are stored in different memory locations.
So any changes made inside functions are not reflected in actual
parameters of caller.
<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\value.png" alt="">
<h5>• Call by Reference</h5>
Both the actual and formal parameters refer to same locations, so any
changes made inside the function are actually reflected in actual
parameters of caller
<img src="C:\Users\GodSpeed\Desktop\mini2\notes\C++\refer.png" alt="">

<center><h3> Inline Functions</h3></center>

• Inline function is a function that is expanded in line when it is called. <br>
• When the inline function is called whole code of the inline function<br>
gets inserted or substituted at the point of inline function call.
• This substitution is performed by the C++ compiler at compile time.<br>
• Inline function may increase efficiency if it is small.
When we use Inline function<br>
• The inline functions are a C++ enhancement feature to increase the
execution time of a program.<br>
• Functions can be instructed to compiler to make them inline so that
compiler can replace those function definition wherever those are
being called.<br>
• It speeds up the function calls by avoiding overhead calls of functions. <br>
• It increases the performance of the program. <br>
Syntax:<br>
The syntax for defining the function inline is:<br>
inline return-type function-name(parameters)<br>
<pre>
// function code
} 
Example:
#include <iostream>
using namespace std;
inline int cube(int s)
{
return s*s*s;
}
int main()
{ int a;
a=cube(3)
cout << "The cube of 3 is: " << a  <<  "\n";
return 0;
} 

Output:
The cube of 3 is: 27
</pre>
<center><h3>Default Arguments in C++</h3></center>
•A default argument is a value provided in a
function declaration that is automatically
assigned by the compiler if the caller of the
function doesn’t provide a value for the
argument with a default value. <br>
Example:
<pre>
#include<iostream>
using namespace std;
int sum(int x, int y, int z=0, int w=0)
{ return (x + y + z + w);
}
int main()
{ cout << sum(10, 15) << endl;
cout << sum(10, 15, 25) << endl;
cout << sum(10, 15, 25, 30) << endl;
return 0;
}
Output:
25
50
80
</pre>
<center><h3>Class
  </h3></center>• It is a user defined data type, which holds its own data members and
  member functions, which can be accessed and used by creating an
  instance of that class. <br>
  • A class is like a blueprint for an object. <br>
  • A class is defined in C++ using keyword class followed by the name of
  class. The body of class is defined inside the curly brackets and
  terminated by a semicolon at the end<br>

<center><h3> Object</h3></center>
• An Object is an instance of a Class. <br>
• When a class is defined, no memory is allocated but when it is
instantiated (i.e. an object is created) memory is allocated.
Declaring Objects:<br>
When a class is defined, only the specification for the object is
defined; no memory or storage is allocated. To use the data and
access functions defined in the class, you need to create objects.<br>
Syntax:<br>
<pre>
ClassName ObjectName;
using namespace std;
class Test
{
public:
int data1;
float data2;
void display_integer(int d)
{
data1 = d;
cout << "Number: " << data1;
}
float display_float()
{
cout << "\nEnter data: ";
cin >> data2;
return data2;
}
};
int main()
{
Test o1, o2; // creating objects
float Obj;
o1.display_integer(12);
Obj= o2.display_float();
cout << "You entered " << Obj;
return 0;
}
</pre>

<center><h3> Member Functions in Classes</h3></center>
There are 2 ways to define a member function: <br>
• Inside class definition<br>
• Outside class definition<br>
To define a member function outside the class definition we have to
use the scope resolution :: operator along with class name and function
name.<br>
To define a member function inside a class. 
<pre>
// to define a function inside a
class
#include<iostream>
using namespace std;
class A
{
public:
void fun()
{
cout << "fun() called";
}
};
int main()
{
A a;
a.fun();
return 0;
} Output:
fun() called 
To define a member function outside a class.
// C++ program to show that
scope resolution operator :: is
used



// to define a function outside a
class
#include<iostream>
using namespace std;
class A
{
public:
// Only declaration
void fun();
};
// Definition outside class using ::
void A::fun()
{
cout << "fun() called";
}
int main()
{
A a;
a.fun();
return 0;
}


Output:
fun() called 
</pre>
<center><h3>Constructor</h3></center>
• Constructors are special class members which are called by the
compiler every time an object of that class is instantiated. <br>
• Constructors have the same name as the class and may be defined
inside or outside the class definition. <br>
There are 3 types of constructors: <br>
• Default Constructor <br>
• Parametrized constructor <br>
• Copy Constructor <br>
<pre>
Example:
using namespace std;
class Geeks
{
public:
int id;
//Default Constructor
Geeks()
{
cout << "Default Constructor
called" << endl;
id=-1;
}
//Parametrized Constructor
Geeks(int x)
{
cout << "Parametrized Constructor called" << endl;
id=x;
}
};
int main() {
// obj1 will call Default Constructor
Geeks obj1;
cout << "Geek id is: " << obj1.id << endl;
// obj1 will call Parametrized Constructor
Geeks obj2(21);
cout << "Geek id is: " << obj2.id << endl;
return 0;
} 

Output:
Default Constructor called
Geek id is: -1
Parametrized Constructor called
Geek id is: 21
</pre>
 <h5>Copy Constructor in C++</h5>
A copy constructor is a member function which initializes an
object using another object of the same class. <br>
A copy constructor has the following general function prototype:
ClassName (const ClassName &old_obj); <br>
• The copy constructor is used to −<br>
• Initialize one object from another of- the same type. <br>
• Copy an object to pass it as an argument to a function.<br>
• Copy an object to return it from a function.
<pre>
#include<iostream>
#include<conio.h>
using namespace std;
class Example {
int a, b;
public:
Example(int x, int y) {
a = x;
b = y;
cout << "\n Im Constructor";
}
Example(const Example& obj) {
a = obj.a;
b = obj.b;
cout << "\n Im Copy Constructor";
}
void Display() {
cout << "\nValues :" << a << "\t" << b;
}
};
int main() {
Example Object(10, 20);
Example Object2(Object);
Example Object3 = Object;
Object.Display();
Object2.Display();
Object3.Display();
getch();
return 0;
}


Sample Output:
Im Constructor
Im Copy Constructor
Im Copy Constructor
Values :10 20
Values :10 20
Values :10 20

</pre>

<center><h3>Destructor</h3></center>
• Destructor is a member function which destructs or deletes an object.
When is destructor called? <br>
A destructor function is called automatically when the object goes out
of scope:<br>
(1) the function ends <br>
(2) the program ends<br>
(3) a block containing local variables ends <br>
(4) a delete operator is called<br>
How destructors are different from a normal member function? <br>
• Destructors have same name as the class preceded by a tilde (~)
<br>• Destructors don’t take any argument and don’t return anything <br>

<pre>
#include <iostream>
using namespace std
;
class HelloWorld
{
public
:
//Constructor
HelloWorld()
{
cout<<"Constructor is
called"<< endl
;
}
//Destructor
~HelloWorld()
{
cout<<"Destructor is
called"<< endl
;
}
//Member function
void display()
{
cout<<"Hello World!"<< endl
;
}
};
int main()
{
//Object created
HelloWorld obj
;
//Member function called
obj.display();
return 0
;
}


Output:
Constructor is called
Hello World!
Destructor is called
</pre>

<center><h3>Friend function</h3></center> 
What are the characteristics of friend functions? <br>
• Friend functions are not a part of the class and are external. <br>
• This function is a “Friend” of a class.<br>
• This is to say, it has special privileges to access to the class's private
and protected members.<br>
• A friend function is not in the scope of the class, in which it has been
declared as friend.<br>
• It cannot be called using the object of that class.<br>
• It can be invoked like a normal function without any object.<br>
• Unlike member functions, it cannot use the member names directly.<br>
• It can be declared in public or private part without affecting its meaning.<br>
• Usually, it has objects as arguments.<br>
<pre>
class Distance
{
private:
int meter;
public:
friend int func(Distance); //friend
function
};
int func(Distance d)
{
d.meter=10;
return d.meter;
} 
</pre>

















</p>
</div>

