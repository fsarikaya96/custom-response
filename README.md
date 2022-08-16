# Making Laravel Custom Response

![License](https://img.shields.io/github/license/fsarikaya96/custom-response?style=flat-square)
![SIZE](https://img.shields.io/github/repo-size/fsarikaya96/custom-response?style=flat-square)

**Installation**

Install the package in a Laravel Custom Response via Composer:

```bash
  # Install custom-response

  composer require justfeel/response
  
```

**Usage**

```bash
  # If successful
  return ResponseResult::generate(true, "Successful", ResponseCodes::HTTP_OK);
  
  #If unsuccessful
  return ResponseResult::generate(false, "Unauthorization", ResponseCodes::HTTP_UNAUTHORIZED);
```
