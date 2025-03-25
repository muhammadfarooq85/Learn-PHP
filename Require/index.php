<?php

// If you’ve ever found yourself traversing through the PHP documentation or working with tools like Composer, you’ve likely encountered functions like include(), require(), include_once(), and require_once(). These functions are not only essential for modular code but also form the backbone of how Composer manages dependencies. Let's take a deep dive into these vital functions and learn when and how to use each one.

// 1. include() vs require(): What's the Difference?
// At a glance, include() and require() might appear similar. They both allow us to include the contents of one file into another. However, they differ in how they handle failure.\

// include(): Soft Inclusion
// If you want to include a file but don’t want your script to stop executing if that file is not found, then include() is your go-to function.include(): Soft Inclusion
// If you want to include a file but don’t want your script to stop executing if that file is not found, then include() is your go-to function.

// include('header.php'); // The script will continue even if header.php is not found
// echo 'Welcome to my website!';

// require(): Strict Inclusion
// On the other hand, if a missing file is critical and you want the script to stop executing when it’s not found, use require().

// require('config.php'); // If config.php is not found, a fatal error will be thrown
// echo 'Connecting to the database...';

// Note:- The key takeaway here is that include() issues a warning, while require() issues a fatal error when the file is not found.

// 2. Making Use of include_once() and require_once(): Avoid Redundancies

// Imagine you have a common file that is required in several places in your code. Accidental multiple inclusions might lead to errors such as function redeclaratio

// include_once(): Soft Inclusion, Just Once
// Like include(), but ensures that the file is included only once.

// include_once('header.php'); // Will only include header.php once

// require_once(): Strict Inclusion, Just Once
// Like require(), but also ensures that the file is included only once.

// require_once('config.php'); // Will only include config.php once

// 3. When to Use Each One?
// Use include() when the file is not essential, such as a template part.
// Use require() when the file is vital, like a configuration file.
// Use include_once() or require_once() when you want to ensure that a file is only included once, such as a class definition.