# Dhii - Module Interface

[![Build Status](https://travis-ci.org/Dhii/module-interface.svg?branch=develop)](https://travis-ci.org/Dhii/module-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/module-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/module-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/module-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/module-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/module-interface/version)](https://packagist.org/packages/dhii/module-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
This package contains interfaces that are useful in describing modules and their attributes and behaviour.

### Interfaces
- [`ModuleInterface`][ModuleInterface] - Represents a module. A module MUST have a key, and MUST be able to be set up
and run separately in order to have the chance to prepare itself and let other potential modules to do the same. The
`setup()` method MAY return a container with the services provided by that module. The `run()` method MAY accept an
optional container with the services provided by the application, but MUST handle the case where no container is provided.
The container provided to `run()` MAY be the same container returned from `setup()`. Implementations that consume
their own services SHOULD therefore rely only on what is provided to `run()`, which gives the application the means
to add or override services. Nevertheless, implementations MUST NOT assume that the container received by `run()` is
the same container returned from `setup()`.

### Requirements
- PHP: <= 7.0 | < 7.4

    Officially supports at least up to php 7.3.x. Should be compatible with PHP 7.x.


[Dhii]: https://github.com/Dhii/dhii

[ModuleInterface]:                              src/ModuleInterface.php
