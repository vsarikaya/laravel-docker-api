# Larave 5.6 Api Controller

# Install

**1. Clone Project**
```
  $ git clone https://github.com/vsarikaya/laravel-docker-api.git
  $ cd laravel-docker-api
```

**2. Install**
```
  $ docker-compose up
  $ docker-compose exec app php artisan migrate
  $ docker-compose exec app php artisan db:seed
  $ docker-compose exec app php artisan passport:install
```

# CURL


**Get Token**
```
curl -X POST \
  http://localhost:8080/api/userLogin \
  -H 'Accept: application/json' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -H 'Postman-Token: e4fde706-7905-0cbb-2951-77246fbb1264' \
  -d 'email=admin%40admin.com&password=admin'
```

**Get All Categories**
```
curl -X POST \
  http://localhost:8080/api/category/getAllCategories \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -H 'Postman-Token: c9455e9b-b650-fbab-4b70-699a4a6d3afe'
```

**Get Category Musics With User Favorites**
```
curl -X POST \
  http://localhost:8080/api/category/getCategoryWithMusicsByCategoryId \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/json' \
  -H 'Postman-Token: 02312d66-95a6-266e-e741-0ce80a8c3cae' \
  -d '{
        "id" : 1,
        "user_id": 1
    }'
```

**Add or Remove Favorite Music**
```
curl -X POST \
  http://localhost:8080/api/category/addOrRemoveFromFavoriteList \
  -H 'Accept: application/json' \
  -H 'Authorization: Bearer {__TOKEN_CODE__}' \
  -H 'Cache-Control: no-cache' \
  -H 'Content-Type: application/json' \
  -H 'Postman-Token: e4941b92-085a-ca72-008d-011d23698e50' \
  -d '{
	    "music_id" : 2,
	    "user_id": 1
    }'
```

# Using
```
  Domain Driven Design
  Dependency Injection
  Logger
  Custom Exceptions
  Custom ResponseResult
```

