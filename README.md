# Как запустить проект и создать 20 000 контактов?

Нужно скачать необходимые библиотеки для проекта

```
composer install
```

## 1. Нужно создать файол .env и заполнить эти поля

```
CLIENT_ID=
CLIENT_SECRET=
REDIRECT_URL=
BASE_DOMAIN=
CODE=
```

## 2. Нужно зарегистрировать наше приложение в amoCRM

```
php index.php register_app
```

## 3. Осталось ввести команду для создания контактов

```
php index.php create_contacts --number=20000
```

