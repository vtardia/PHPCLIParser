PHP Command Line Parser Library
===============================

**This project has been superseded by [cli-parser](https://github.com/vtardia/cli-parser) and is now officialy unmaintained.**

## Description

CLIParser is an helper library that parses the command line arguments of a PHP script detecting short and long options, switches and arguments.

The parser function is similar to Linux's next_option() function in both behavior and configuration.

With CLIPArser you can build scripts like:

    myscript -abc -v -o somefile.log --name=SomeName --other-option OtherValue Argument1 Argument2 ... ArgumentN

In addition you can parse the arguments starting from an arbitrary position, so you can have:

    myscript doAction [OPTIONS] Argument1 ... ArgumentN

## Included

 - Library
 - Example file
 - PHPUnit Tests

## Installation

Put the `CLIParser.class.php` file into you include directory, then include it and use it!
