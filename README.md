# Single id is not allowed on composite primary key in entity EntityName

How to reproduce
```shell
composer install
php bin/console doctrine:database:create
php bin/console doctrine:schema:create
vendor/bin/phpunit
```

## stack trace
```
Doctrine\ORM\Mapping\MappingException : Single id is not allowed on composite primary key in entity App\Entity\ShopOfferPrice
 /auditor-multi-id-bug/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/MappingException.php:477
 /auditor-multi-id-bug/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php:1859
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Transaction/AuditTrait.php:22
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Transaction/TransactionProcessor.php:68
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Transaction/TransactionProcessor.php:142
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Transaction/TransactionProcessor.php:36
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Transaction/TransactionManager.php:36
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Event/DoctrineSubscriber.php:47
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Logger/Logger.php:26
 /auditor-multi-id-bug/vendor/damienharper/auditor/src/Provider/Doctrine/Auditing/Logger/LoggerChain.php:28
 /auditor-multi-id-bug/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php:1774
 /auditor-multi-id-bug/vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php:446
 /auditor-multi-id-bug/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php:376
 /auditor-multi-id-bug/tests/MultiIdTest.php:31
```

## composer info

```yaml
composer/package-versions-deprecated 1.11.99.1 Composer plugin that provides efficient querying for installed package versions (no runtime IO)
damienharper/auditor                 1.2.0     The missing audit log library.
damienharper/auditor-bundle          4.1.0     Integrate auditor library in your Symfony projects.
doctrine/annotations                 1.12.1    Docblock Annotations Parser
doctrine/cache                       1.10.2    PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.
doctrine/collections                 1.6.7     PHP Doctrine Collections library that adds additional functionality on top of PHP arrays.
doctrine/common                      3.1.1     PHP Doctrine Common project is a library that provides additional functionality that other Doctrine projects depend on such as better reflection support, proxies and much...
doctrine/dbal                        2.13.0    Powerful PHP database abstraction layer (DBAL) with many features for database schema introspection and management.
doctrine/deprecations                v0.5.3    A small layer on top of trigger_error(E_USER_DEPRECATED) or PSR-3 logging with options to disable all deprecations or selectively for packages.
doctrine/doctrine-bundle             2.3.0     Symfony DoctrineBundle
doctrine/event-manager               1.1.1     The Doctrine Event Manager is a simple PHP event system that was built to be used with the various Doctrine projects.
doctrine/inflector                   2.0.3     PHP Doctrine Inflector is a small library that can perform string manipulations with regard to upper/lowercase and singular/plural forms of words.
doctrine/instantiator                1.4.0     A small, lightweight utility to instantiate objects in PHP without invoking their constructors
doctrine/lexer                       1.2.1     PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.
doctrine/orm                         2.8.2     Object-Relational-Mapper for PHP
doctrine/persistence                 2.1.0     The Doctrine Persistence project is a set of shared interfaces and functionality that the different Doctrine object mappers share.
doctrine/sql-formatter               1.1.1     a PHP SQL highlighting library
myclabs/deep-copy                    1.10.2    Create deep copies (clones) of your objects
phar-io/manifest                     2.0.1     Component for reading phar.io manifest information from a PHP Archive (PHAR)
phar-io/version                      3.1.0     Library for handling version information and constraints
phpdocumentor/reflection-common      2.2.0     Common reflection classes used by phpdocumentor to reflect the code structure
phpdocumentor/reflection-docblock    5.2.2     With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.
phpdocumentor/type-resolver          1.4.0     A PSR-5 based resolver of Class names, Types and Structural Element Names
phpspec/prophecy                     1.13.0    Highly opinionated mocking framework for PHP 5.3+
phpunit/php-code-coverage            7.0.14    Library that provides collection, processing, and rendering functionality for PHP code coverage information.
phpunit/php-file-iterator            2.0.3     FilterIterator implementation that filters files based on a list of suffixes.
phpunit/php-text-template            1.2.1     Simple template engine.
phpunit/php-timer                    2.1.3     Utility class for timing
phpunit/php-token-stream             4.0.4     Wrapper around PHP's tokenizer extension.
phpunit/phpunit                      8.5.15    The PHP Unit Testing framework.
psr/cache                            1.0.1     Common interface for caching libraries
psr/container                        1.1.1     Common Container Interface (PHP FIG PSR-11)
psr/event-dispatcher                 1.0.0     Standard interfaces for event handling.
psr/log                              1.1.3     Common interface for logging libraries
sebastian/code-unit-reverse-lookup   1.0.2     Looks up which function or method a line of code belongs to
sebastian/comparator                 3.0.3     Provides the functionality to compare PHP values for equality
sebastian/diff                       3.0.3     Diff implementation
sebastian/environment                4.2.4     Provides functionality to handle HHVM/PHP environments
sebastian/exporter                   3.1.3     Provides the functionality to export PHP variables for visualization
sebastian/global-state               3.0.1     Snapshotting of global state
sebastian/object-enumerator          3.0.4     Traverses array structures and object graphs to enumerate all referenced objects
sebastian/object-reflector           1.1.2     Allows reflection of object attributes, including inherited and non-public ones
sebastian/recursion-context          3.0.1     Provides functionality to recursively process PHP variables
sebastian/resource-operations        2.0.2     Provides a list of PHP built-in functions that operate on resources
sebastian/type                       1.1.4     Collection of value objects that represent the types of the PHP type system
sebastian/version                    2.0.1     Library that helps with managing the version number of Git-hosted PHP projects
symfony/cache                        v5.2.6    Provides an extended PSR-6, PSR-16 (and tags) implementation
symfony/cache-contracts              v2.2.0    Generic abstractions related to caching
symfony/config                       v5.2.4    Helps you find, load, combine, autofill and validate configuration values of any kind
symfony/console                      v5.2.6    Eases the creation of beautiful and testable command line interfaces
symfony/dependency-injection         v5.2.6    Allows you to standardize and centralize the way objects are constructed in your application
symfony/deprecation-contracts        v2.2.0    A generic function and convention to trigger deprecation notices
symfony/doctrine-bridge              v5.2.6    Provides integration for Doctrine with various Symfony components
symfony/dotenv                       v5.2.4    Registers environment variables from a .env file
symfony/error-handler                v5.2.6    Provides tools to manage errors and ease debugging PHP code
symfony/event-dispatcher             v5.2.4    Provides tools that allow your application components to communicate with each other by dispatching events and listening to them
symfony/event-dispatcher-contracts   v2.2.0    Generic abstractions related to dispatching event
symfony/filesystem                   v5.2.6    Provides basic utilities for the filesystem
symfony/finder                       v5.2.4    Finds files and directories via an intuitive fluent interface
symfony/flex                         v1.12.2   Composer plugin for Symfony
symfony/framework-bundle             v5.2.6    Provides a tight integration between Symfony components and the Symfony full-stack framework
symfony/http-client-contracts        v2.3.1    Generic abstractions related to HTTP clients
symfony/http-foundation              v5.2.4    Defines an object-oriented layer for the HTTP specification
symfony/http-kernel                  v5.2.6    Provides a structured process for converting a Request into a Response
symfony/lock                         v5.2.6    Creates and manages locks, a mechanism to provide exclusive access to a shared resource
symfony/options-resolver             v5.2.4    Provides an improved replacement for the array_replace PHP function
symfony/polyfill-intl-grapheme       v1.22.1   Symfony polyfill for intl's grapheme_* functions
symfony/polyfill-intl-normalizer     v1.22.1   Symfony polyfill for intl's Normalizer class and related functions
symfony/polyfill-mbstring            v1.22.1   Symfony polyfill for the Mbstring extension
symfony/polyfill-php73               v1.22.1   Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions
symfony/polyfill-php80               v1.22.1   Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions
symfony/property-access              v5.2.4    Provides functions to read and write from/to an object or array using a simple string notation
symfony/property-info                v5.2.4    Extracts information about PHP class' properties using metadata of popular sources
symfony/routing                      v5.2.6    Maps an HTTP request to a set of configuration variables
symfony/security-bundle              v5.2.6    Provides a tight integration of the Security component into the Symfony full-stack framework
symfony/security-core                v5.2.6    Symfony Security Component - Core Library
symfony/security-csrf                v5.2.4    Symfony Security Component - CSRF Library
symfony/security-guard               v5.2.4    Symfony Security Component - Guard
symfony/security-http                v5.2.6    Symfony Security Component - HTTP Integration
symfony/service-contracts            v2.2.0    Generic abstractions related to writing services
symfony/string                       v5.2.6    Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way
symfony/translation                  v5.2.6    Provides tools to internationalize your application
symfony/translation-contracts        v2.3.0    Generic abstractions related to translation
symfony/twig-bridge                  v5.2.6    Provides integration for Twig with various Symfony components
symfony/twig-bundle                  v5.2.4    Provides a tight integration of Twig into the Symfony full-stack framework
symfony/var-dumper                   v5.2.6    Provides mechanisms for walking through any arbitrary PHP variable
symfony/var-exporter                 v5.2.4    Allows exporting any serializable PHP data structure to plain PHP code
symfony/yaml                         v5.2.5    Loads and dumps YAML files
theseer/tokenizer                    1.2.0     A small library for converting tokenized PHP source code into XML and potentially other formats
twig/twig                            v3.3.0    Twig, the flexible, fast, and secure template language for PHP
webmozart/assert                     1.10.0    Assertions to validate method input/output with nice error messages.
```