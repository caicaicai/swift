#Class and Structure Instances
154 -167


Class and Structure Instances
The Resolution structure definition and the VideoMode class definition only describe what a
Resolution or VideoMode will look like. They themselves do not describe a specific resolution or
video mode. To do that, you need to create an instance of the structure or class.
The syntax for creating instances is very similar for both structures and classes:
let someResolution = Resolution()
let someVideoMode = VideoMode()
Structures and classes both use initializer syntax for new instances. The simplest form of
initializer syntax uses the type name of the class or structure followed by empty
parentheses, such as Resolution() or VideoMode(). This creates a new instance of the class or
structure, with any properties initialized to their default values. Class and structure
initialization is described in more detail in Initialization.
Accessing Properties
You can access the properties of an instance using dot syntax. In dot syntax, you write
the property name immediately after the instance name, separated by a period (.),
without any spaces:
println("The width of someResolution is \(someResolution.width)")
// prints "The width of someResolution is 0"
In this example, someResolution.width refers to the width property of someResolution, and returns its
default initial value of 0.
You can drill down into sub-properties, such as the width property in the resolution property of
a VideoMode:
println("The width of someVideoMode is \(someVideoMode.resolution.width)")
// prints "The width of someVideoMode is 0"
You can also use dot syntax to assign a new value to a variable property:
someVideoMode.resolution.width = 1280
println("The width of someVideoMode is now \(someVideoMode.resolution.width)")
// prints "The width of someVideoMode is now 1280"
N O T E
Unlike Objective-C, Swift enables you to set sub-properties of a structure property directly. In the last example
above, the width property of the resolution property of someVideoMode is set directly, without your needing to
set the entire resolution property to a new value.
Memberwise Initializers for Structure Types
All structures have an automatically-generated memberwise initializer, which you can use
to initialize the member properties of new structure instances. Initial values for the
properties of the new instance can be passed to the memberwise initializer by name:
let vga = Resolution(width: 640, height: 480)
Unlike structures, class instances do not receive a default memberwise initializer.
Initializers are described in more detail in Initialization.
Structures and Enumerations Are Value Types
A value type is a type that is copied when it is assigned to a variable or constant, or when
it is passed to a function.
You’ve actually been using value types extensively throughout the previous chapters. In
fact, all of the basic types in Swift—integers, floating-point numbers, Booleans, strings,
arrays and dictionaries—are value types, and are implemented as structures behind the
scenes.
All structures and enumerations are value types in Swift. This means that any structure
and enumeration instances you create—and any value types they have as properties—are
always copied when they are passed around in your code.
Consider this example, which uses the Resolution structure from the previous example:
let hd = Resolution(width: 1920, height: 1080)
var cinema = hd
This example declares a constant called hd and sets it to a Resolution instance initialized with
the width and height of full HD video (1920 pixels wide by 1080 pixels high).
It then declares a variable called cinema and sets it to the current value of hd. Because
Resolution is a structure, a copy of the existing instance is made, and this new copy is
assigned to cinema. Even though hd and cinema now have the same width and height, they
are two completely different instances behind the scenes.
Next, the width property of cinema is amended to be the width of the slightly-wider 2K
standard used for digital cinema projection (2048 pixels wide and 1080 pixels high):
cinema.width = 2048
Checking the width property of cinema shows that it has indeed changed to be 2048:
println("cinema is now \(cinema.width) pixels wide")
// prints "cinema is now 2048 pixels wide"
However, the width property of the original hd instance still has the old value of 1920:
println("hd is still \(hd.width) pixels wide")
// prints "hd is still 1920 pixels wide"
When cinema was given the current value of hd, the values stored in hd were copied into the
new cinema instance. The end result is two completely separate instances, which just
happened to contain the same numeric values. Because they are separate instances,
setting the width of cinema to 2048 doesn’t affect the width stored in hd.
The same behavior applies to enumerations:
enum CompassPoint {
case North, South, East, West
}
var currentDirection = CompassPoint.West
let rememberedDirection = currentDirection
currentDirection = .East
if rememberedDirection == .West {
println("The remembered direction is still .West")
}
prints "The remembered direction is still .West"
When rememberedDirection is assigned the value of currentDirection, it is actually set to a copy of
that value. Changing the value of currentDirection thereafter does not affect the copy of the
original value that was stored in rememberedDirection.
Classes Are Reference Types
Unlike value types, reference types are not copied when they are assigned to a variable
or constant, or when they are passed to a function. Rather than a copy, a reference to the
same existing instance is used instead.
Here’s an example, using the VideoMode class defined above:
let tenEighty = VideoMode()
tenEighty.resolution = hd
tenEighty.interlaced = true
tenEighty.name = "1080i"
tenEighty.frameRate = 25.0
This example declares a new constant called tenEighty and sets it to refer to a new instance
of the VideoMode class. The video mode is assigned a copy of the HD resolution of 1920 by
1080 from before. It is set to be interlaced, and is given a name of "1080i". Finally, it is set to
a frame rate of 25.0 frames per second.
Next, tenEighty is assigned to a new constant, called alsoTenEighty, and the frame rate of
alsoTenEighty is modified:
let alsoTenEighty = tenEighty
alsoTenEighty.frameRate = 30.0
Because classes are reference types, tenEighty and alsoTenEighty actually both refer to the
same VideoMode instance. Effectively, they are just two different names for the same single
instance.
Checking the frameRate property of tenEighty shows that it correctly reports the new frame
rate of 30.0 from the underlying VideoMode instance:
println("The frameRate property of tenEighty is now \(tenEighty.frameRate)")
// prints "The frameRate property of tenEighty is now 30.0"
Note that tenEighty and alsoTenEighty are declared as constants, rather than variables.
However, you can still change tenEighty.frameRate and alsoTenEighty.frameRate because the values
of the tenEighty and alsoTenEighty constants themselves do not actually change. tenEighty and
alsoTenEighty themselves do not “store” the VideoMode instance—instead, they both refer to a
VideoMode instance behind the scenes. It is the frameRate property of the underlying VideoMode
that is changed, not the values of the constant references to that VideoMode.
Identity Operators
Because classes are reference types, it is possible for multiple constants and variables to
refer to the same single instance of a class behind the scenes. (The same is not true for
structures and enumerations, because they are value types and are always copied when
they are assigned to a constant or variable, or passed to a function.)
It can sometimes be useful to find out if two constants or variables refer to exactly the
same instance of a class. To enable this, Swift provides two identity operators:
Use these operators to check whether two constants or variables refer to the same single
instance:
if tenEighty === alsoTenEighty {
println("tenEighty and alsoTenEighty refer to the same Resolution instance.")
}
// prints "tenEighty and alsoTenEighty refer to the same Resolution instance."
Note that “identical to” (represented by three equals signs, or ===) does not mean the
same thing as “equal to” (represented by two equals signs, or ==):
When you define your own custom classes and structures, it is your responsibility to
decide what qualifies as two instances being “equal”. The process of defining your own
implementations of the “equal to” and “not equal to” operators is described in
Equivalence Operators.
Pointers
If you have experience with C, C++, or Objective-C, you may know that these languages
use pointers to refer to addresses in memory. A Swift constant or variable that refers to
an instance of some reference type is similar to a pointer in C, but is not a direct pointer
to an address in memory, and does not require you to write an asterisk (*) to indicate
that you are creating a reference. Instead, these references are defined like any other
constant or variable in Swift.
Identical to (===)
Not identical to (!==)
“Identical to” means that two constants or variables of class type refer to exactly
the same class instance.
“Equal to” means that two instances are considered “equal” or “equivalent” in
value, for some appropriate meaning of “equal”, as defined by the type’s designer.
Choosing Between Classes and Structures
You can use both classes and structures to define custom data types to use as the
building blocks of your program’s code.
However, structure instances are always passed by value, and class instances are always
passed by reference. This means that they are suited to different kinds of tasks. As you
consider the data constructs and functionality that you need for a project, decide whether
each data construct should be defined as a class or as a structure.
As a general guideline, consider creating a structure when one or more of these
conditions apply:
Examples of good candidates for structures include:
In all other cases, define a class, and create instances of that class to be managed and
passed by reference. In practice, this means that most custom data constructs should be
classes, not structures.
Assignment and Copy Behavior for Collection Types
Swift’s Array and Dictionary types are implemented as structures. However, arrays have
slightly different copying behavior from dictionaries and other structures when they are
The structure’s primary purpose is to encapsulate a few relatively simple data
values.
It is reasonable to expect that the encapsulated values will be copied rather than
referenced when you assign or pass around an instance of that structure.
Any properties stored by the structure are themselves value types, which would
also be expected to be copied rather than referenced.
The structure does not need to inherit properties or behavior from another
existing type.
The size of a geometric shape, perhaps encapsulating a width property and a height
property, both of type Double.
A way to refer to ranges within a series, perhaps encapsulating a start property and
a length property, both of type Int.
A point in a 3D coordinate system, perhaps encapsulating x, y and z properties,
each of type Double.
assigned to a constant or variable, and when they are passed to a function or method.
The behavior described for Array and Dictionary below is different again from the behavior of
NSArray and NSDictionary in Foundation, which are implemented as classes, not structures.
NSArray and NSDictionary instances are always assigned and passed around as a reference to
an existing instance, rather than as a copy.
N O T E
The descriptions below refer to the “copying” of arrays, dictionaries, strings, and other values. Where copying
is mentioned, the behavior you see in your code will always be as if a copy took place. However, Swift only
performs an actual copy behind the scenes when it is absolutely necessary to do so. Swift manages all value
copying to ensure optimal performance, and you should not avoid assignment to try to preempt this
optimization.
Assignment and Copy Behavior for Dictionaries
Whenever you assign a Dictionary instance to a constant or variable, or pass a Dictionary
instance as an argument to a function or method call, the dictionary is copied at the point
that the assignment or call takes place. This process is described in Structures and
Enumerations Are Value Types.
If the keys and/or values stored in the Dictionary instance are value types (structures or
enumerations), they too are copied when the assignment or call takes place. Conversely,
if the keys and/or values are reference types (classes or functions), the references are
copied, but not the class instances or functions that they refer to. This copy behavior for a
dictionary’s keys and values is the same as the copy behavior for a structure’s stored
properties when the structure is copied.
The example below defines a dictionary called ages, which stores the names and ages of
four people. The ages dictionary is then assigned to a new variable called copiedAges and is
copied when this assignment takes place. After the assignment, ages and copiedAges are two
separate dictionaries.
var ages = ["Peter": 23, "Wei": 35, "Anish": 65, "Katya": 19]
var copiedAges = ages
The keys for this dictionary are of type String, and the values are of type Int. Both types are
value types in Swift, and so the keys and values are also copied when the dictionary copy
takes place.
You can prove that the ages dictionary has been copied by changing an age value in one of
the dictionaries and checking the corresponding value in the other. If you set the value for
"Peter" in the copiedAges dictionary to 24, the ages dictionary still returns the old value of 23
from before the copy took place:
copiedAges["Peter"] = 24
println(ages["Peter"])
// prints "23"
Assignment and Copy Behavior for Arrays
The assignment and copy behavior for Swift’s Array type is more complex than for its
Dictionary type. Array provides C-like performance when you work with an array’s contents
and copies an array’s contents only when copying is necessary.
If you assign an Array instance to a constant or variable, or pass an Array instance as an
argument to a function or method call, the contents of the array are not copied at the
point that the assignment or call takes place. Instead, both arrays share the same
sequence of element values. When you modify an element value through one array, the
result is observable through the other.
For arrays, copying only takes place when you perform an action that has the potential to
modify the length of the array. This includes appending, inserting, or removing items, or
using a ranged subscript to replace a range of items in the array. If and when array
copying does take place, the copy behavior for an array’s contents is the same as for a
dictionary’s keys and values, as described in Assignment and Copy Behavior for
Dictionaries.
The example below assigns a new array of Int values to a variable called a. This array is
also assigned to two further variables called b and c:
var a = [1, 2, 3]
var b = a
var c = a
You can retrieve the first value in the array with subscript syntax on either a, b, or c:
println(a[0])
// 1
println(b[0])
// 1
println(c[0])
// 1
If you set an item in the array to a new value with subscript syntax, all three of a, b, and c
will return the new value. Note that the array is not copied when you set a new value
with subscript syntax, because setting a single value with subscript syntax does not have
the potential to change the array’s length:
a[0] = 42
println(a[0])
// 42
println(b[0])
// 42
println(c[0])
// 42
However, if you append a new item to a, you do modify the array’s length. This prompts
Swift to create a new copy of the array at the point that you append the new value.
Henceforth, a is a separate, independent copy of the array.
If you change a value in a after the copy is made, a will return a different value from b and
c, which both still reference the original array contents from before the copy took place:
a.append(4)
a[0] = 777
println(a[0])
// 777
println(b[0])
// 42
println(c[0])
// 42
Ensuring That an Array Is Unique
It can be useful to ensure that you have a unique copy of an array before performing an
action on that array’s contents, or before passing that array to a function or method. You
ensure the uniqueness of an array reference by calling the unshare method on a variable of
array type. (The unshare method cannot be called on a constant array.)
If multiple variables currently refer to the same array, and you call the unshare method on
one of those variables, the array is copied, so that the variable has its own independent
copy of the array. However, no copying takes place if the variable is already the only
reference to the array.
At the end of the previous example, b and c both reference the same array. Call the unshare
method on b to make it become a unique copy:
b.unshare()
If you change the first value in b after calling the unshare method, all three arrays will now
report a different value:
b[0] = -105
println(a[0])
// 777
println(b[0])
// -105
println(c[0])
// 42
Checking Whether Two Arrays Share the Same Elements
Check whether two arrays or subarrays share the same storage and elements by
comparing them with the identity operators (=== and !==).
The example below uses the “identical to” operator (===) to check whether b and c still
share the same array elements:
if b === c {
println("b and c still share the same array elements.")
} else {
println("b and c now refer to two independent sets of array elements.")
}
// prints "b and c now refer to two independent sets of array elements."
Alternatively, use the identity operators to check whether two subarrays share the same
elements. The example below compares two identical subarrays from b and confirms that
they refer to the same elements:
if b[0...1] === b[0...1] {
println("These two subarrays share the same elements.")
} else {
println("These two subarrays do not share the same elements.")
}
// prints "These two subarrays share the same elements."
Forcing a Copy of an Array
Force an explicit copy of an array by calling the array’s copy method. This method performs
a shallow copy of the array and returns a new array containing the copied items.
The example below defines an array called names, which stores the names of seven
people. A new variable called copiedNames is set to the result of calling the copy method on
the names array:
var names = ["Mohsen", "Hilary", "Justyn", "Amy", "Rich", "Graham", "Vic"]
var copiedNames = names.copy()
You can prove that the names array has been copied by changing an item in one of the
arrays and checking the corresponding item in the other. If you set the first item in the
copiedNames array to "Mo" rather than "Mohsen", the names array still returns the old value of
"Mohsen" from before the copy took place:
copiedNames[0] = "Mo"
println(names[0])
// prints "Mohsen"
N O T E
If you simply need to be sure that your reference to an array’s contents is the only reference in existence, call
the unshare method, not the copy method. The unshare method does not make a copy of the array unless it
is necessary to do so. The copy method always copies the array, even if it is already unshared.