# php72-to-82-rector

This project is designed to facilitate the transition of PHP code from version 7.2 to 8.2 using Rector, a powerful tool for automated code refactoring.

## Project Structure

- **src/**: Contains the legacy code that may require refactoring.
  - **LegacyClass.php**: Defines a class with a method that demonstrates legacy code.
  - **functions.php**: Contains a standalone function that serves as an example of procedural code.
  - **traits/**: Contains traits used in the legacy code.
    - **LegacyTrait.php**: Defines a trait with a method that illustrates trait usage.

- **tests/**: Contains tests for the legacy code and Rector fixtures.
  - **LegacyClassTest.php**: PHPUnit test case for `LegacyClass`.
  - **rector/**: Contains fixtures for Rector analysis.
    - **fixtures/**: Holds legacy PHP code and expected output.
      - **legacy.php.inc**: Input for Rector.
      - **expected.php.inc**: Expected output after refactoring.

- **rector.php**: Configuration file for Rector, specifying rules for migration.

- **composer.json**: Lists dependencies required for the project, including PHPUnit and Rector.

- **phpunit.xml.dist**: Configuration file for PHPUnit, setting up the testing environment.

- **.editorconfig**: Defines coding styles and formatting rules.

- **.gitattributes**: Specifies attributes for Git.

## Setup Instructions

1. Clone the repository:
   ```
   git clone <repository-url>
   cd php72-to-82-rector
   ```

2. Install dependencies using Composer:
   ```
   composer install
   ```

3. Run Rector to analyze and refactor the legacy code:
   ```
   vendor/bin/rector process src --set php82
   ```

4. Run the tests to ensure everything works as expected:
   ```
   vendor/bin/phpunit
   ```

## Usage Guidelines

- Use the provided tests to verify that the legacy code behaves as expected after refactoring.
- Modify the Rector configuration in `rector.php` to customize the migration process according to your project's needs.
- Review the output in `expected.php.inc` to understand the changes made by Rector.

This project serves as a practical example of upgrading PHP code and can be extended to include additional legacy code and tests as needed.