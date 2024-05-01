
<?php include "notes.php"; ?>

<div class="main">
  <center><h2>Python Tutorial</h2></center>
<center><h3>About Python</h3></center>
• Guido van Rossum is the creator
of the Python programming
language, first released in the
early 1990s. <br>
• Its name comes from a 1970s
British comedy sketch television
show called Monty Python’s
Flying Circus . <br>
<center><h3>History</h3></center>
• It was developed in National Research Institute for
Mathematics and Computer Science in the Netherlands. <br>
• Python is derived from many other languages, including
ABC, Modula-3, C, C++, Algol-68, SmallTalk, and Unix shell
and other scripting languages.<br>
• Python 1.0 was released in November 1994. <br>
• In 2000, Python 2.0 was released.<br>
• Python 2.7.11 is the latest edition of Python 2.<br>
• Meanwhile, Python 3.0 was released in 2008.<br>
• Python 3 is not backward compatible with Python 2.<br>
• Python 3.6.1 is the latest version of Python 3.<br>   
<center><h3>Features of Python</h3></center>
• Python is Interpreted: Python is processed at runtime by the
interpreter. You do not need to compile your program before
executing it. This is similar to PERL and PHP. <br>
• Python is Interactive: You can actually sit at a Python prompt and
interact with the interpreter directly to write your programs.<br>
• Python is Object-Oriented: Python supports Object-Oriented style
or technique of programming that encapsulates code within
objects.<br>
• Python is a Beginner's Language: Python is a great language for the
beginner-level programmers and supports the development of a
wide range of applications from simple text processing to WWW
browsers to games.<br>
• A broad standard library: Python's bulk of the library is very
portable and cross-platform compatible on UNIX, Windows,
and Macintosh.<br>
• Portable: Python can run on a wide variety of hardware
platforms and has the same interface on all platforms.
• Extendable: You can add low-level modules to the Python<br>
interpreter. These modules enable programmers to add to or
customize their tools to be more efficient.<br>
• Databases: Python provides interfaces to all major
commercial databases.<br>
• GUI Programming: Python supports GUI applications that can
be created and ported to many system calls, libraries and
windows systems.<br>
<center><h3>Basics of PYTHON</h3></center>
• The print Function <br>
– print "Hello World“ #is acceptable in Python 2<br>
– print ("Hello World") # in Python 3, print must be
followed by ()<br>
– print(x, end=" ") # Appends a space instead of a
newline in Python 3 <br>
<h4>Basic Input and Output </h4>
• name = input('What is your name?: ') <br>
– Characters within quotes are called strings.<br>
– This particular use of a string, for requesting input from
the user, is called a prompt.<br>
– The input function displays the string on the screen to
prompt the user for input.<br>
What is your name?: Rossum<br>
>>> name = input('What is your name?: ')<br>
What is your name?: Rossum<br>
>>> print('Hello', name)<br>
Hello Rossum<br>
• In Python, input() is used to request and get<br>
information from the user, and<br>
• print() is used to display information on the screen.<br>
NOTE: The input function always returns what the user<br>
enters as a string of characters.<br>
Example: P = int(input(‘now u can enter a number’))<br>
Exercise 1: Print the following message on the console.<br>
Hello I am: NAME student of GLA University
Solution:<br>
name=input(‘enter your name’)<br>
print(‘Hello I am ’, name, ‘student of GLA university’)<br>
>>> x=input("something:")<br>
something:'10' #entered data treated as string with or
without ''<br>
>>> x<br>
'10‘<br>
>>> x=input("something:")<br>
something:'10' #entered data treated as string with or
without ''<br>
>>> x<br>
"'10'“ <br>
<center><h3>Python Identifiers</h3></center>

• A Python identifier is a name used to identify a variable,
function, class, module or other object. <br>
• An identifier starts with a letter A to Z or a to z or an
underscore (_) followed by zero or more letters, underscores
and digits (0 to 9).<br>
Here are naming conventions for Python identifiers-<br>
• Class names start with an uppercase letter.<br>
• All other identifiers start with a lowercase letter.<br>
• Starting an identifier with a single leading underscore
indicates that the identifier is private.<br>
• Starting an identifier with two leading underscores indicates
a strong private identifier.<br>
• If the identifier also ends with two trailing underscores, the
identifier is a language-defined special name.<br>
 <h4>Python Statement, Indentation and Comments</h4>
• Multi-line statement: In Python, end of a statement is
marked by a newline character.<br>
• But we can make a statement extend over multiple lines with
the line continuation character (\).<br>
Example: a = 1 + 2 + 3 + \<br>
4 + 5 + 6 + \<br>
7 + 8 + 9<br>
• This is explicit line continuation. <br>
• In Python, line continuation is implied inside parentheses (
), brackets [ ] and braces { }.<br>
Example: a = (1 + 2 + 3 +
4 + 5 + 6 +
7 + 8 + 9)<br>
Example: colors = ['red',
'blue',
'green']<br>
• We could also put multiple statements in a single line using
semicolons<br>
Example:<br>
• a = 1; b = 2; c = 3<br>
<center><h3>Python Indentation</h3></center>

• Most of the programming languages like C, C++, Java use
braces { } to define a block of code. <br>
• Python uses indentation.<br>
• A code block (body of a function, loop etc.) starts with
indentation and ends with the first unindented line.<br>
• The amount of indentation is up to you, but it must be
consistent throughout that block.<br>
• Generally four whitespaces are used for indentation and is
preferred over tabs. <br>
• Example 1<br>
<pre>
for i in range(1,11):
print(i)
if i == 5:
break
• Example 2
if True:
print('Hello')
a = 5
</pre>
<center><h3>Python Comments</h3></center>

• In Python, we use the hash (#) symbol to start writing a comment.<br>
• It extends up to the newline character.<br>
• Comments are for programmers for better understanding of a program.<br>
• Python Interpreter ignores comment.<br>
#This is a comment<br>
#print out Hello<br>
print('Hello')<br>
• Another way of doing this is to use triple quotes, either ''' or """.<br>
• These triple quotes are generally used for multi-line strings.<br>
• But they can be used as multi-line comment as well.<br>
• Unless they are not docstrings, they do not generate any extra code.<br>
"""This is also a perfect example of multi-line comments"""<br>
<center><h3>Docstring in Python </h3></center>
• Docstring is short for documentation string.<br>
• It is a string that occurs as the first statement in a module, function,
class, or method definition. We must write what a function/class
does in the docstring.<br>
• Triple quotes are used while writing docstrings.<br>
• For example:<br>
<pre>
In [2]: def double(num):
...: """Function to the double vale"""
...: return 2*num
...:
In [3]: print(double.__doc__)
Function to the double vale
</pre>
 <center><h3> Keywords</h3></center>
 <pre>and  ,  as,    assert   , break    ,  class ,    continue
 def  ,   del  ,   elif,    else,    except  ,    exec
 finally  ,  for ,   from   ,global   , if , import
 in   ,  is,  lambda  nonlocal  ,  not   ,  or
 pass  , raise  ,  retur,   try ,  while  ,   with  , yield
True    , False , None</pre> 
<center><h3>Python Variables</h3></center>

• Variables: a name that is assigned to a value <br>
Ex. A = 50 <br>
• We don't need to declare a variable before using it.<br>
• In Python, we simply assign a value to a variable and it will
exist.<br>
• We don't even have to declare the type of the variable.<br>
• This is handled internally according to the type of value we
assign to the variable.<br>
Variable assignment<br>
a = 5<br>
b = 3.2<br>
c = "Hello"<br>
Multiple assignments<br>
• In Python, multiple assignments can be made in a single statement
as follows:<br>
a, b, c = 5, 3.2, "Hello"<br>
• If we want to assign the same value to multiple variables at once,
we can do this as<br>
x = y = z = "same"<br>
This assigns the "same" string to all the three variables.
Data types in Python<br>
• Values are classified into different classes, or data types:<br>
• We can use the type() function to know which class a
variable or a value belongs to and<br>
• the isinstance() function to check if an object belongs to a
particular class.<br>
>>> type("Hello, World!")<br>
str<br>
>>> type(17)<br>
int <br>
• Every value in Python has a data-type.<br>
• Since everything is an object in Python programming,<br>
• data types are actually classes and<br>
• variables are instance (object) of these classes.<br>
• Some of the important types are listed below.
<h5>
    1. Numbers<br>
    2. List<br>
    3. Tuple<br>
    4. Strings<br>
    5. Python Set<br>
    6. Dictionary<br>
</h5>
<center><h3>1. Numbers</h3></center>

• Integers, floating point numbers and complex numbers <br>
• They are defined as int, float and complex class in Python.<br>
Ex1. a = 5<br>
print(a, "is of type", type(a)) # int<br>
Ex2. b = 2.0<br>
print(b, "is of type", type(b)) #float<br>
Ex3. c = 1+2j<br>
print(isinstance(c,complex)) #True<br>
• Integers can be of any length, it is only limited by the
memory available.<br>
• A floating point number is accurate up to 15 decimal
places<br>
<center><h3>2. List</h3></center>

• List is an ordered sequence of items.<br>
• It is one of the most used data type in Python and is very
flexible.<br>
• All the items in a list do not need to be of the same type<br>.
• Declaring a list is pretty straight forward.<br>
• Items separated by commas are enclosed within brackets [ ].<br>
• >>> a = [1, 2.2, 'python']<br>
• We can use the slicing operator [ ] to extract an item or a
range of items from a list.<br>
• Index starts form 0 in Python.<br>
<pre>
In [1]: a=[10,20,30,40,45,65,66]
In [2]: print(a[2])
30
In [3]: print(a[0:3])
[10, 20, 30]
In [4]: print(a[2:4])
[30, 40]
In [5]: print(a[2:])
[30, 40, 45, 65, 66]
In [6]: print(a[1:-3])
[20, 30, 40]
In [7]: print(a[-6:-3])
[20, 30, 40]
</pre>

• Lists are mutable, meaning, value of elements of a
list can be altered.<br>

>>> a = [1,2,3]<br>
>>> a[2]=4<br>
>>> a [1, 2, 4]<br>
Input the values from user in a list<br>
L=[int(x) for x in input().split()]<br>
1 33 555 56666<br>
print(L)<br>
[1, 33, 555, 56666]<br>
L = []<br>
for i in range(10):<br>
a = int(input("enter a number. "))<br>
L.append(a)<br>
<h4>Multiple input from user</h4>

a,b,c=input("enter three values ").split() <br>
enter three values 11 22 33<br>
a,b,c=[int(a), int(b),int(c)]<br>
print(a+b+c)<br>
66<br>
<h4> Fibonacci series</h4>
• def fib(n):<br>
• a=[0,1]<br>
• for i in range(2,n):<br>
• a.append(a[i-1]+a[i-2])<br>
• else:<br>
• print(a)<br>
• In [17]: fib(5)<br>
• [0, 1, 1, 2, 3]<br>
<center><h3>3.Tuple</h3></center>

• Tuple is an ordered sequence of items same as list. <br>
• The only difference is that tuples are immutable.<br>
• Tuples once created cannot be modified.<br>
• Tuples are used to write-protect data and are usually
faster than list as it cannot change dynamically.<br>
• It is defined within parentheses () where items are
separated by commas.<br>
• >>> t = (5,'program', 1+3j)<br>
• We can use the slicing operator [] to extract items but
we cannot change its value.<br>
t = (5,'program', 1+3j)<br>
# t[1] = 'program‘<br>
print("t[1] = ", t[1])<br>
# t[0:3] = (5, 'program', (1+3j))<br>
print("t[0:3] = ", t[0:3])<br>
# Generates error<br>
# Tuples are immutable<br>
t[0] = 10<br>
 <center><h3>4. Strings</h3></center>
• String is sequence of Unicode characters.<br>
• We can use single quotes or double quotes to<br>
represent strings.<br>
• Multi-line strings can be denoted using triple
quotes, ’’’ or ’’’.<br>
>>> s = "This is a string"<br>
>>> s = '''a multiline’’’<br>
• Like list and tuple, slicing operator [ ] can be used with
string.<br>
• Strings are immutable.<br>
s = 'Hello world!‘<br>
• # s[4] = 'o‘<br>
print("s[4] = ", s[4])<br>
• # s[6:11] = 'world‘<br>
print("s[6:11] = ", s[6:11])<br>
• # Generates error<br>
• # Strings are immutable in Python<br>
s[5] ='d'<br>
 <center><h3>5. Set</h3></center>
• Set is an unordered collection of unique items.<br>
• Set is defined by values separated by comma inside braces { }.<br>
• Items in a set are not ordered.<br>
a = {5,2,3,1,4}<br>
• # printing set variable<br>
print("a = ", a)<br>
• # data type of variable a<br>
print(type(a))<br>
• Since, set are unordered collection, indexing has no meaning.<br>
• Hence the slicing operator [] does not work.<br>
• We can perform set operations like union, intersection on two
sets.<br>
• Set have unique values.<br>
• They eliminate duplicates.<br>
<center><h3>6. Dictionary </h3></center>
• Dictionary is an unordered collection of key-value pairs.<br>
• It is generally used when we have a huge amount of data.<br>
• Dictionaries are optimized for retrieving data.<br>
• We must know the key to retrieve the value.<br>
• In Python, dictionaries are defined within braces {} with
each item being a pair in the form key:value.<br>
• Key and value can be of any type.<br>
>>> d = {1:'value','key':2}<br>
>>> type(d) <class 'dict'><br>
• We use key to retrieve the respective value. But not the
other way around.<br>
d={10:'value', 'key':20}<br>
print(type(d))<br>
<class 'dict'><br>
print(d[10])<br>
value<br>
print(d['key'])<br>
20<br>
 <center><h3>Some Basic Arithmetic Operator</h3></center>
<pre>
+ (addition),
- (subtraction),
* (multiplication),
/ (division),
** (exponentiation)
// (truncating division)
% (remainder)
</pre>
<center><h3>Python Flow Control</h3></center>

<h4>• Python if Statement Syntax</h4>  <br>
if test expression:<br>
statement(s)<br>
Example: Python if Statement<br>
# If the number is positive, we print an appropriate message<br>
num = 3<br>
if num > 0:<br>
print(num, "is a positive number.")<br>
print("This is always printed.")<br>
• Syntax of if...else<br>
if test_expression:<br>
Body of if<br>
else:<br>
Body of else<br>
# Program checks if the number is<br>
# positive or negative And displays an<br>
# appropriate message<br>
num = 3<br>
if num >= 0:<br>
print("Positive or Zero")<br>
else:<br>
print("Negative number")<br>
• Syntax of if...elif...else<br>
if test_expression:<br>
Body of if<br>
elif test_expression:<br>
Body of elif<br>
else:<br>
Body of else<br>
Example:<br>
num = -4.5<br>
if num > 0:<br>
print("Positive number")<br>
elif num == 0:<br>
print("Zero")<br>
else:<br>
print("Negative number")<br>
 <h4>• Python Nested if statements</h4>
num = float(input("Enter a number: "))<br>
if num >= 0:<br>
if num == 0:<br>
print("Zero")<br>
else:<br>
print("Positive number")<br>
else:<br>
print("Negative number")<br>
<h4>Syntax of for Loop </h4>
for target in object: # Assign object items to target<br>
statements # Repeated loop body: use target<br>
else: # Optional else part<br>
statements # If we didn't hit a 'break'<br>
range(start,stop,step)<br>
• Default values are start =<br>
0 and step = 1 and<br>
optional<br>
• Loop until value is stop<br>
- 1<br><br>
Example 1:<br>
mysum = 0<br>
for i in range(7, 10):<br>
mysum += i<br>
print(mysum)<br><br>
Example 2:
mysum = 0<br>
for i in range(5, 11, 2):<br>
mysum += i<br>
print(mysum)<br>
for i in range(3):<br>
print("three times")<br>
for i in range(1, 5):<br>
print("four times")<br>
for i in range(1, 5, 1):<br>
print("also four times")<br>
for i in range(5, 1, -1):<br>
print("4 times")<br>
while Loop<br>
while test: # Loop test<br>
statements # Loop body<br>
else: # Optional else<br>
statements # Run if didn't exit loop with break<br>
n = input("You're in the Lost Forest. Go left or right? ")<br>
while n == "right":<br>
n = input("You're in the Lost Forest. Go left or right? ")<br>
print("You got out of the Lost Forest!")<br>
• x='computer‘<br>
• while x:<br>
• ...: print(x)<br>
• ...: x=x[1:]<br>
• ...:<br>
• computer<br>
• omputer<br>
• mputer<br>
• puter<br>
• uter<br>
• ter<br>
• er<br>
• r<br>
<h4>Use of else as a flag </h4>
y = int(input("enter a value"))<br>
x = y//2<br>
while(x>1):<br>
if y%x==0:<br>
print(y,'has factor', x)<br>
break<br>
x=x-1<br>
else:<br>
print(y,'is a prime no')<br><br>
# Program to find the sum of all numbers stored in a list<br>
# List of numbers<br>
numbers = [6, 5, 3, 8, 4, 2, 5, 4, 11]<br>
# variable to store the sum<br>
sum = 0<br>
# iterate over the list<br>
for val in numbers:<br>
sum = sum+val<br>
# Output: The sum is 48<br>
print("The sum is", sum)<br>
<h4>while and for LOOPS </h4>
• Iterate through numbers in a sequence<br>
# more complicated with while loop<br>
n = 0<br>
while n < 5:<br>
print(n)<br>
n = n+1<br>
# shortcut with for loop<br>
for n in range(5):<br>
print(n)<br>
<h4> for loop with else</h4>
• A for loop can have an optional else block as well.<br>
• The else part is executed if the items in the sequence used in for
loop exhausts.<br>
• break statement can be used to stop a for loop.<br>
• In such case, the else part is ignored.<br>
• Hence, a for loop's else part runs if no break occurs.<br>
digits = [0, 1, 5]<br>
for i in digits:<br>
print(i)<br>
else:<br>
print("No items left.")<br>
When you run the program,<br>
the output will be:<br>
0<br>
1<br>
5<br>
No items left.<br>

<center><h3>Python break and continue</h3></center>

• In Python, break and continue statements can alter
the flow of a normal loop.<br>
• Loops iterate over a block of code until test
expression is false, but<br>
– terminate the current iteration or<br>
– even the whole loop without checking test expression.<br>
• The break and continue statements are used in these
cases.<br>
# Use of break statement inside loop<br>
for val in "string":<br>
if val == "i":<br>
break<br>
print(val)<br>
print("The end")<br>
Python continue statement<br><br>
# Program to show the use of continue statement inside loop<br>
for val "string":<br>
if val == "i":<br>
continue<br>
print(val)<br>
print("The end")<br>
<h4>Python pass statement </h4>
• In Python programming, pass is a null statement. The difference
between a comment and pass statement in Python is that, while
the interpreter ignores a comment entirely, pass is not ignored.<br>
• However, nothing happens when pass is executed. It results into no
operation (NOP).<br>
Syntax of pass<br>
pass
• We generally use it as a placeholder.<br>
• Suppose we have a loop or a function that is not implemented yet,
but we want to implement it in the future.<br>
• They cannot have an empty body.<br>
• The interpreter would complain.<br>
• So, we use the pass statement to construct a body that does
nothing.<br>
# pass is just a placeholder for<br>
# functionality to be added later.<br>
sequence = {'p', 'a', 's', 's'}<br>
for val in sequence:<br>
pass<br>
• We can do the same thing in an empty function or class as<br>
well.<br>
def function(args):<br>
pass<br>
class example:<br>
pass<br>
<center><h3>Python Strings </h3></center>
• A string is a sequence of characters. <br>
• A character is simply a symbol.<br>
• Computers do not deal with characters, they deal with
numbers (binary).<br>
• Even though you may see characters on your screen,<br>
internally it is stored and manipulated as a combination of 0's
and 1's.<br>
• This conversion of character to a number is called encoding,
and the reverse process is decoding. <br>
• ASCII and Unicode are some of the popular encoding used.<br>
• In Python, string is a sequence of Unicode character.<br>
• Unicode was introduced to include every character in all<br>
languages and bring uniformity in encoding.<br>
• Python does not support a character type; these are treated<br>
as strings of length one, thus also considered a substring.
Updating Strings<br>
• You can "update" an existing string by (re)assigning a variable
to another string.<br>
• The new value can be related to its previous value or to a
completely different string altogether.<br>
var1 = 'Hello World!'<br>
print ("Updated String :- ", var1[:6] + 'Python')<br>
• When the above code is executed, it produces the following
result-<br>
• Updated String :- Hello Python <br><br>
<h4>String Formatting Operator %</h4>


• This operator is unique to strings.  <br>
Example −<br>
print ("My name is %s and roll number is %d " % (‘ABC', 210))<br>
• When the above code is executed, it produces the following
result −<br>
My name is ABC and roll number is 210<br> <br>


<h4>Python String Operations </h4>
• Concatenation of Two or More Strings<br>
• The + operator does this in Python.<br>
• Simply writing two string literals together also concatenates the m<br>
• The * operator can be used to repeat the string for a given number
of times.<br>
str1 = 'Hello‘<br>
str2 ='World!‘<br>
# using +<br>
print('str1 + str2 = ', str1 + str2)<br>
# using *<br>
print('str1 * 3 =', str1 * 3)<br>
• Writing two string literals together also concatenates them
like + operator.<br>
• If we want to concatenate strings in different lines, we can use
parentheses.<br>
>>> # two string literals together<br>
>>> 'Hello ''World!'<br>
'Hello World!'<br>
>>> # using parentheses<br>
>>> s = ('Hello ‘<br>
... 'World')<br>
>>> s<br>
'Hello World'<br>
Iterating Through String<br>
count = 0<br>
for letter in 'Hello World':<br>
if(letter == 'l'):<br>
count += 1<br>
print(count,'letters found')<br>
String Membership Test<br>
• We can test if a sub string exists within a string or not, using<br>
the keyword in.<br>
>>> 'a' in 'program'<br>
True<br>
>>> 'at' not in 'battle'<br>
False<br>

<h4>Built-in functions to Work with Python </h4>
>>>s='cold‘ <br>
list(enumerate(s))<br>
[(0, 'c'), (1, 'o'), (2, 'l'), (3, 'd')]<br>
>>>len(s)<br>
4<br>
Raw String to ignore escape sequence<br>
>>> print("This is \x61 \ngood example")<br>
This is a good example<br>
>>> print(r"This is \x61 \ngood example")<br>
This is \x61 \ngood example<br>
The format() Method for Formatting Strings<br>
• Format strings contains curly braces {} as placeholders or
replacement fields which gets replaced.<br>
• We can use positional arguments or keyword arguments to
specify the order.<br>
# default(implicit) order<br>
print("{}, {} and {}".format(‘AA','BB',‘CC'))<br>
Output:<br>
AA BB and CC<br>
# order using positional argument<br>
print("{1}, {0} and {2}".format(‘AA','BB',‘CC'))<br>
Output:<br>
BB AA and CC<br>
# order using keyword argument<br>
print("{c}, {b} and {a}".format(a=‘AA, b=‘BB', c=‘CC'))<br>
Output:<br>
CC BB and AA<br>
• The format() method can have optional format specifications.<br>
• They are separated from field name using colon.<br>
For example,<br>
we can left-justify <,<br>
right-justify > or<br>
center ^ a string in the given space.<br>
• We can also format integers as binary, hexadecimal etc. and<br>
• Floats can be rounded or displayed in the exponent format. <br>
>>> # formatting integers
>>> "Binary representation of {0} is {0:b}".format(12)<br>
'Binary representation of 12 is 1100' <br>
>>> # formatting floats<br>
>>> "Exponent representation: {0:e}".format(1566.345)<br>
'Exponent representation: 1.566345e+03' <br>
>>> # round off<br>
>>> print("One third is: {0:.3f}".format(1/3))<br>
'One third is: 0.333‘<br>
>>> # string alignment<br>
>>>print("{:<10}{:^10}{:>10}|".format('butter','bread','ham'))
butter bread ham <br>
<h4>Old style formatting </h4>
• We can even format strings like the old sprintf() style used in C<br>
programming language.<br>
• We use the % operator to accomplish this.<br>
>>> x = 12.3456789<br>
>>> print('The value of x is %.2f' %x)<br>
The value of x is 12.35<br>
>>> print('The value of x is %.4f' %x)<br>
The value of x is 12.3457<br>
Common Python String Methods<br>
>>> "PrOgRaMmInG".lower()<br>
'programming'
>>> "PrOgRaMmIng".upper()
'PROGRAMMING'
>>> "This will split all words into a list".split()<br>
['This', 'will', 'split', 'all', 'words', 'into', 'a', 'list']<br>
>>> ' '.join(['This', 'will', 'join', 'all', 'words', 'into', 'a', 'string'])<br>
'This will join all words into a string'<br>
>>> 'Happy New Year'.find('ew')<br>
7<br>
>>>index(str, beg=0, end=len(string))<br>
Same as find(), but raises an exception if str not found.<br>
>>> 'Happy New Year'.replace('Happy','Brilliant')<br>
'Brilliant New Year'<br>
• capitalize()<br>
• Capitalizes first letter of string<br>
>>>A=‘hello world’<br>
>>>A.capitalize()<br>
Output: Hello world<br>
• center(width, fillchar)<br>
• Returns a string padded with fillchar with the original string<br>
centered to a total of width columns.<br>
>>>a="hello“<br>
>>>a.center (10,'*')<br>
'**hello***'<br>
• string.count(substr, beg,end)<br>
• Counts how many times str occurs in string or<br>
• in a substring of string<br>
• if starting index beg and ending index end are given.<br>
a="hello world“<br>
a.count('l',0,len(a))<br>
Output:
3<br>
• endswith(suffix, beg, end)<br>
• Determines if string or a substring of string (if starting index
beg and ending index end are given) ends with suffix; returns
true if so and false otherwise.<br>
a="hello world“<br>
a.endswith('l',0,len(a))<br>
Output:<br>
• False<br>
a.endswith('d',0,len(a))<br>
Output:<br>
• True<br>
>>>isalnum()<br>
• Returns true if string has at least 1 character and all characters are
alphanumeric and false otherwise.<br>
>>>isalpha()<br>
• Returns true if string has at least 1 character and all characters are
alphabetic and false otherwise.<br>
>>>a='123‘<br>
>>>a.isalpha()<br>
• False<br>
>>>a='aanbvnv'<br>
>>>a.isalpha()<br>
• True<br>
>>>isdigit() or isnumeric()<br>
• Returns true if the string contains only digits and false
otherwise.<br>
>>>islower()<br>
• Returns true if string has all cased characters in lowercase and
false otherwise.<br>
>>>isspace()<br>
• Returns true if string contains only whitespace characters and
false otherwise.<br>
>>>isupper()<br>
• Returns true if string has all cased characters in uppercase and
false otherwise.<br>
>>>ljust(width[, fillchar])<br>
• Returns a space-padded string with the original string leftjustified to a total of width columns.<br>
>>>rjust(width,[, fillchar])<br>
• Returns a space-padded string with the original string
right-justified to a total of width columns.<br>
>>>a='hh‘<br>
>>>a.ljust(10,'*')<br>
'hh********'<br>
>>>lstrip()<br>
Removes all leading whitespace in string.<br>
>>>a=" dffgfg“<br>
>>>a.lstrip()<br>
'dffgfg‘<br>
>>>strip([chars])<br>
Performs both lstrip() and rstrip() on string<br>
>>>max(str)<br>
• Returns the max alphabetical character from the string
str.<br>
>>>min(str)<br>
• Returns the min alphabetical character from the string
str.<br>
>>>replace(old, new [, max])<br>
• Replaces all occurrences of old in string with new or at most
max occurrences if max given.<br>
>>>rstrip()<br>
• Removes all trailing whitespace of string.<br>
>>>split(str="", num=string.count(str))<br>
• Splits string according to delimiter str (space if not provided)
and returns list of substrings;<br>
• split into at most num substrings if given.<br>
>>>a='asjhagjhg ghjghjg g jhgjhg‘<br>
>>>a.split("g",a.count('g'))<br>
['asjha', 'jh', ' ', 'hj', 'hj', ' ', ' jh', 'jh', '']<br>
>>>swapcase()<br>
• Inverts case for all letters in string.<br>
>>>title()<br>
• Returns "titlecased" version of string, that is, all words begin
with uppercase and the rest are lowercase.<br>

<center><h3>Function in Python</h3></center>
<pre>
def function_name( parameters ): 
"function_docstring"
function_suite
return [expression] 
def my_func():
x = 10
print("Value inside function:",x)
x = 20
my_func()
print("Value outside function:",x)
Value inside function: 10
Value outside function: 20 
</pre>
<br>
<pre>
def function_name( parameters ): 
"function_docstring"
function_suite
return [expression] 
def my_func():
x = 10
print("Value inside function:",x)
x = 20
my_func()
print("Value outside function:",x)
Value inside function: 10
Value outside function: 20 

</pre> 
<h4>Pass by Reference vs Value</h4> 
<pre>
def changeme( mylist1 ):
"This changes a passed list into this function"
print ("before change: ", mylist1)
mylist1[2]=50
print ("after change: ", mylist1)
return
# Now you can call changeme function
mylist = [10,20,30]
changeme( mylist )
print ("Values outside the function: ", mylist)
• Here, we are maintaining reference of the passed object and
appending values in the same object.
• Therefore, this would produce the following result-
• before change: [10, 20, 30]
• after change: [10, 20, 50]
• Values outside the function: [10, 20, 50]
</pre>
<pre>
def changeme( mylist ):
"This changes a passed list into this function"
mylist = [1,2,3,4] # This would assign new reference in mylist
print ("Values inside the function: ", mylist)
return
# Now you can call changeme function
mylist = [10,20,30]
changeme( mylist )
print ("Values outside the function: ", mylist)
• The parameter mylist is local to the function changeme.
• Changing mylist within the function does not affect mylist.
• The function accomplishes nothing and finally this would
produce the following resultValues inside the function: [1, 2, 3, 4]
Values outside the function: [10, 20, 30] 

</pre>


<h4>Function Arguments </h4>
• You can call a function by using the following types of
formal arguments- <br>
– Required arguments<br>
– Keyword arguments<br>
– Default arguments<br>
– Variable-length arguments <br>
Required Arguments <h4></h4>
• Required arguments are the arguments passed to a function
in correct positional order.<br>
• Here, the number of arguments in the function call should
match exactly with the function definition. <br>
# Function definition is here<br>
def printme( str ):<br>
"This prints a passed string into this function"<br>
print (str)<br>
return<br>
# Now you can call printme function<br>
printme(‘hello’)<br>
Output: hello <br>
<h4>Keyword Arguments </h4>
• Keyword arguments are related to the function calls.<br>
• When you use keyword arguments in a function call, the caller
identifies the arguments by the parameter name.<br>
• This allows you to skip arguments or place them out of order
because the Python interpreter is able to use the keywords
provided to match the values with parameters.<br>
• You can also make keyword calls to the printme() function in
the following ways-<br>
def printme( strn ):<br>
"This prints a passed string into this function"<br>
print (strn)<br>
return<br>
# Now you can call printme function<br>
printme( strn = "My string") <br>
# Function definition is here<br>
def printinfo( name, age ):<br>
"This prints a passed info into this function"<br>
print ("Name: ", name)<br>
print ("Age ", age)<br>
return<br>
# Now you can call printinfo function<br>
printinfo( age=50, name="miki" ) <br>
 <h4>Default Arguments</h4>
• A default argument is an argument that assumes a default value if a
value is not provided in the function call for that argument.<br>
def printinfo( name, age = 35 ):<br>
print ("Name: ", name)<br>
print ("Age ", age)<br>
# Now you can call printinfo function<br>
printinfo( age=50, name="miki" )<br>
printinfo( name="miki" )<br>
Name: miki<br>
Age 50<br>
Name: miki<br>
Age 35<br>
<h4>Variable-length Arguments </h4>
• You may need to process a function for more arguments than
you specified while defining the function.<br>
• These arguments are called variable-length arguments and
are not named in the function definition, unlike required and
default arguments.<br>
def function_name([formal_args,] *var_args_tuple ):<br>
function_stmt<br>
return [expression]<br>
• An asterisk (*) is placed before the variable name
that holds the values of all non keyword variable
arguments.<br>
• This tuple remains empty if no additional arguments
are specified during the function call.<br>
# Now you can call<br>
# printinfo function<br>
printinfo( 10 )<br>
printinfo( 70, 60, 50 )<br>
Output is:<br>
10<br>
Output is:<br>
70<br>
60<br>
50<br>
# Function definition is here<br>
def printinfo( arg1, *vartuple ):<br>
print ("Output is: ")<br>
print (arg1)<br>
for var in vartuple:<br>
print (var) <br>
<h4>The Anonymous Functions </h4>
• These functions are called anonymous because they are not
declared in the standard manner by using the def keyword.<br>
• You can use the lambda keyword to create small anonymous
functions.<br>
– Lambda forms can take any number of arguments but return
just one value in the form of an expression.<br>
– They cannot contain commands or multiple expressions.<br>
– An anonymous function cannot be a direct call to print
because lambda requires an expression.<br>
– Lambda functions have their own local namespace and
cannot access variables other than those in their parameter
list and those in the global namespace.<br>
• The syntax of lambda function contains only a single<br>
statement, which is as followslambda [arg1 [,arg2,.....argn]]:expression <br>
# Function definition is here<br>
>>>sum = lambda arg1, arg2: arg1 + arg2<br>
# Now you can call sum as a function<br>
>>>print ("Value of total : ", sum( 10, 20 ))<br>
>>>print ("Value of total : ", sum( 20, 20 )) <br>
 <h4>Use of Lambda Function</h4>
• We use lambda functions when we require a nameless
function for a short period of time.<br>
• In Python, we generally use it as an argument to a higherorder function (a function that takes in other functions
as arguments).<br>
• Lambda functions are used along with built-in functions<br>
like filter(), map() etc.<br>

<center><h3>Example use with filter()</h3></center>
<pre>
• filter(function, iterable)
• creates a new list from the elements for which the function
returns True.
# Program to filter out only the even items from a list
my_list = [1, 5, 4, 6, 8, 11, 3, 12]
new_list = list(filter(lambda x: (x%2 == 0) , my_list))
print(new_list)
Output: [4, 6, 8, 12]
</pre>

<center><h3>Example use with map()</h3></center>
<pre>
• map(function, iterable)
• It applies a function to every item in the iterable.
• We can use map() to on a lambda function with a list:
>>>list = [1,2,3,4,5]
>>>squaredList = list(map(lambda x: x*x, list))
>>>print(squaredList)
</pre> 
<center><h3>Reduce function</h3></center>
<pre>
• reduce(function, iterable)
• applies two arguments cumulatively to the items of iterable,
from left to right.
>>>from functools import reduce
>>>list = [1,2,3,4,5]
>>>s = reduce(lambda x, y: x+y, list)
>>>print(s)
• In this case the expression is always true, thus it simply sums
up the elements of the list.
>>>def fahrenheit(T):
return ((float(9)/5)*T + 32)
>>>temp = [36.5, 37, 37.5,39]
>>>F = map(fahrenheit, temp)
>>>print(list(F))
[97.7, 98.600, 99.5, 102.2]
>>>temp = [36.5, 37, 37.5,39]
>>>F=map(lambda T:((float(9)/5)*T +32 ), temp)
>>>list(F)
[97.7, 98.600, 99.5, 102.2]
</pre>

<center><h3>Global Vs Local variable </h3></center>
>>>total = 0 # This is global variable. <br>

>>>def sum( arg1, arg2 ):<br>
total = arg1 + arg2; # Here total is local variable.<br>
print ("Inside the function local total : ", total)<br>
return total<br>
# Now you can call sum function<br>
>>>sum( 10, 20 )<br>
>>>print ("Outside the function global total : ", total ) <br>
• Inside the function local total : 30<br>
• Outside the function global total : 0 <br>
<center><h3>Python List Comprehension and Slicing </h3></center>

• The list type is a container that holds a number of other
objects, in a given order.<br>
• The list type allows you to add and remove objects from the
sequence.<br>
Creating Lists<br>
• L = []<br>
• L = [expression, ...]<br>
• This construct is known as a “list display”.<br>
• Python also supports computed lists, called “list comprehensions”.<br>
• In its simplest form, a list comprehension has the following syntax:<br>
• L = [expression for variable in sequence]<br>
• where the expression is evaluated once, for every item in the
sequence.<br>
• The expressions can be anything; you can put all kinds of objects in
lists, including other lists.<br>
• You can also use the built-in list type object to create lists:<br>
>>>L = list() # empty list<br>
>>>L = list(sequence)<br>
>>>L = list(expression for variable in sequence)<br><br>
• A list comprehension generally consist of these parts :<br>
– Output expression,<br>
– input sequence,<br>
– a variable representing member of input sequence and<br>
– an optional predicate part.<br>
For example :<br>
>>>A = [x ** 2 for x in range (1, 11) if x % 2 == 1]<br>
• here, x ** 2 is output expression,<br>
• range (1, 11) is input sequence,<br>
• x is variable and<br>
• if x % 2 == 1 is predicate part.<br>
>>>a=[x**2 for x in range(1,11) if x%2==0]<br>
>>>print(a)<br>
[4, 16, 36, 64, 100]<br>
>>>a=[x**2 for x in range(1,11)]<br>
>>>print(a)<br>
• [1, 4, 9, 16, 25, 36, 49, 64, 81, 100]<br>
>>>a=[int(x) for x in input(“Enter values ").split()]<br>
Enter values 12 34 56 767 89 909<br>
>>>a<br>
[12, 34, 56, 767, 89, 909]<br>
# list which extracts number<br>
>>>string = "my phone number is : 11122 !!“<br>
>>>A=[x for x in string if x.isdigit()]<br>
>>>A<br>
[‘1', ‘1', ‘1', ‘2', ‘2’]<br>
• Note that Python creates a single new list every time<br>
you execute the [] expression.<br>
• And Python never creates a new list if you assign a list to a
variable.<br>
>>>A = B = [] # both names will point to the same list<br>
>>>A = []<br>
>>>B = A # both names will point to the same list<br>
>>>A = []; B = [] # independent lists<br>

<h4>Accessing Lists</h4>



• Lists implement the standard sequence interface; <br>
• len(L) returns the number of items in the list,<br>
• L[i] returns the item at index i (the first item has index 0),
• and L[i:j] returns a new list, containing the objects
between i and j.<br>
• n = len(L)<br>
• item = L[index]<br>
• seq = L[start : stop]<br><br>
<h4>python’s slicing operator </h4>
• [start : stop : steps] which means that slicing will start from
index start will go up to stop in step of steps.<br>
• Default value of<br>
– start is 0,<br>
– stop is last index of list and<br>
– for step it is 1<br>
• So [: stop] will slice list from starting till stop index and<br>
• [start : ] will slice list from start index till end<br>
• Negative value of steps shows right to left traversal instead of
left to right traversal<br>
• that is why [: : -1] prints list in reverse order.<br><br>
 <h4>Looping Over Lists</h4>
• The for-in statement makes it easy to loop over the items in a
list:<br>
>>>for item in L:<br>
print (item)<br>
• If you need both the index and the item, use the enumerate function:<br>
>>>for index, item in enumerate(L):<br>
print( index, item)<br>
• If you need only the index, use range and len:<br>
>>>for index in range(len(L)):<br>
print (index)<br><br>
 <h4>List Methods</h4>
• “in” operator :- This operator is used to check if an element
is present in the list or not.<br>
Returns true if element is present in list else returns false.<br>
• “not in” operator :- This operator is used to check if an<br>
element is not present in the list or not.<br>
Returns true if element is not present in list else returns false.<br>
>>>lis = [1, 4, 3, 2, 5]<br>
>>>if 4 in lis:<br>
print ("List is having element with value 4")<br>
else :<br>
print ("List is not having element with value 4")<br>
# checking if 4 is not list using "not in"<br>
>>>if 4 not in lis:<br>
print ("List is not having element with value 4")<br>
else :<br>
print ("List is having element with value 4")<br>
• len() :- This function returns the length of list.<br>
• min() :- This function returns the minimum element of list.<br>
• max() :- This function returns the maximum element of list.<br>
>>>lis = [2, 1, 3, 5, 4]<br>
# using len() to print length of list<br>
>>>print (len(lis))<br>
# using min() to print minimum element of list<br>
>>>print (min(lis))<br>
# using max() to print maximum element of list<br>
>>>print (max(lis))<br>
• “+” operator :- This operator is used to concatenate two lists<br>
into a single list.<br>
• “*” operator :- This operator is used to multiply the list “n”<br>
times and return the single list.<br>
>>>a=[1,2,3]<br>
>>>b=[4,5,6]<br>
>>>c=a+b<br>
>>>c<br>
[1, 2, 3, 4, 5, 6]<br>
• #using '*' to combine lists<br>
>>>a=[1,2,3]<br>
>>>b=a*2<br>
>>>b<br>
[1, 2, 3, 1, 2, 3]<br>
• index(ele, beg, end) :- This function returns the index of first
occurrence of element after beg and before end.<br>
• count() :- This function counts the number of occurrences of
elements in list.<br>
>>> a=[int(x) for x in input().split()]<br>
12 34 43 45 12 78 12 88<br>
>>>a.index(12,1,len(a))<br>
4<br>
>>>a.count(12)<br>
3<br>
• del[a : b] :- This method deletes all the elements in<br>
range starting from index ‘a’ till ‘b’ mentioned in arguments.<br>
• pop() :- This method deletes the element at the<br>
position mentioned in its arguments.<br>
>>>a=[11,22,33,44,55,66,77,88,99]<br>
>>>del a[2:5]<br>
>>>a<br>
[11, 22, 66, 77, 88, 99]<br>
>>>a.pop(3)<br>
77<br>
• insert(a, x) :- This function inserts an element at the<br>
position mentioned in its arguments. It takes 2 arguments, position
and element to be added at respective position.<br>
• remove() :- This function is used to delete the first occurrence of<br>
number mentioned in its arguments.<br>
>>>a=[11, 22, 66, 88, 99]<br>
>>>a.insert(2,555)<br>
>>>a<br>
[11, 22, 555, 66, 88, 99]<br>
>>>a.remove(22)<br>
>>>a<br>
[11, 555, 66, 88, 99]<br>
• sort() :- This function sorts the list in increasing order.<br><br>
• reverse() :- This function reverses the elements of list.<br><br>
>>>a=[11, 555, 66, 88, 99]<br>
>>>a.sort()<br>
>>>a<br>
[11, 66, 88, 99, 555]<br>
>>>a.reverse()<br>
>>>a<br>
[555, 99, 88, 66, 11]<br>
• extend(b) :- This function is used to extend the list with the
elements present in another list. This function takes another list as
its argument.<br>
• clear() :- This function is used to erase all the elements of list. After
this operation, list becomes empty.<br>
>>>a=[11,22,33,44,55,66]<br>
>>>b=[10,20,30,40]<br>
>>>a.extend(b)<br>
>>>a<br>
[11, 22, 33, 44, 55, 66, 10, 20, 30, 40]<br>
>>>a.clear()<br>
>>>a
[]<br>
• append(): Used for appending and adding elements to List.It is used
to add elements to the last position of List.<br>
>>>a=[11, 22, 33, 44, 55, 66, 111]<br>
>>>a.append(222)
>>>a<br>
[11, 22, 33, 44, 55, 66, 111, 222]<br>
• sum() : Calculates sum of all the elements of List.<br>
Syntax:<br>
>>>List = [1, 2, 3, 4, 5]<br>
>>>print(sum(List))<br>
15<br>

<center><h3>Any & All operators in Python</h3></center>
• Any and All are two built ins provided in python used for
successive And/Or. <br> <br>
<b>Any</b> <br>
• Returns true if any of the items is True. <br>
• It returns False if empty or all are false. <br>
• Any can be thought of as a sequence of OR operations on the
provided iterables. <br>
• It short circuit the execution i.e. stop the execution as soon as
the result is known. <br>
# Since all are false, false is returned <br>
>>>print (any([False, False, False, False])) <br>
False <br>
# Here the method will short-circuit at the second item (True) and will return True. <br>
>>>print (any([False, True, False, False])) <br>
True <br>
# Here the method will short-circuit at the first (True) and will return True. <br>
>>>print (any([True, False, False, False]))
True <br><br>
<b>All</b> <br>
• Returns true if all of the items are True (or if the
iterable is empty).<br>
• All can be thought of as a sequence of AND
operations on the provided iterables.<br>
• It also short circuit the execution i.e. stop the
execution as soon as the result is known.<br>
• Syntax : all(list of iterables)<br>
# Here all the iterables are True so all will return True and the same will be printed<br>
>>>print (all([True, True, True, True]))<br>
True<br>
# Here the method will short-circuit at the first item (False) and will return False.<br>
>>>print (all([False, True, True, False]))<br>
False<br>
# This statement will return False, as no True is found in the iterables<br>
>>>print (all([False, False, False]))<br>
False<br>


















</div>

