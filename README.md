# Bug report "summerize prefixed table attribute"

## Preconditions in a nutshell

- FilamentPHP 4.0.0-beta22
- Use a "prefix" for database configuration (example: 'test_')
- Use "->summarize()" on a resources table column

## Error in a nutshell

- Table name in query is prefixed twice (example: "no such column: test_test_summarized_data.value")

## Use test project setup

- composer install
- php artisan serve
- open path "/test"
- navigate to Summarized Data(s)
