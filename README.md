
## What Is It?

Cimri, Google or Facebook wants products data from e-commerce systems for advertising or listing on their systems. E-commerce systems provide a file or feed through an API with all product data for each system in formats supported by the platforms (JSON, XML etc.).

This CLI app is an example to create a file with an existing json file in the formats these platforms support.

## How does it work

You should run the following command structure in the root of the project

```bash
  php feeder.php PROVIDER_NAME JSON_DATA_FILE_NAME
```
Example:


```bash
  php feeder.php Google products.json
```

|  | Arguments     | Description                |
| :-------- | :------- | :------------------------- |
| `1.` | `php` | It works with PHP on command line. |
| `2.` | `feeder.php` | Project file name. It should be feeder.php if you didn't change the name. |
| `3.` | `Provider Name` | Provider name.  It must be **Cimri**, **Facebook** or **Google**. |
| `4.` | `JSON Data Name` | Json data file name. It should be **products.json** if you didn't change or added a new one|
