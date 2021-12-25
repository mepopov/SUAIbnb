# **Coursework** #
# **Информационная система - SUAIbnb**
--------------------------

# **Цель работы**
Изучить технологии разработки ПО. Разработать информационную систему SUAIbnb - онлайн-площадка для размещения и поиска краткосрочной аренды частного жилья.

-------------------------
# **Описание системы**
В системе предусмотрены две роли:
* **Клиент** 
    * Создание новой заявки 
    * Просмотр ранее отправленных
* **Администратора** 
    * Просмотр всех заявок
    * Обработка заявок
    * Регистрация новых пользователей
    * Сброс пароля 

# **Пользовательские сценарии**

**Клиент**

При переходе на сайт, пользователю необходимо пройти авторизацию или зарегистрироваться. Для этого необходимо нажать кнопку “Join The Movement” в верхнем правом углу, а после ввести необходимые данные. После регистрации, пользователь может авторизоваться и полностью воспользоваться функционалом сайта. Для этого необходимо нажать на кнопку “Sign Up” в верхнем правом углу. После этого потенциальному гостю будет представлена подборка из рекомендованных квартир, которые возможно будет забронировать.

**Администратор**

Панель администратора будет располагаться по отдельной ссылке и не видна обычным пользователям (/admin). После прохождения авторизации доступны следующие функции:

· Размещение новый объявлений

· Консультирование и обработка заявок потенциальных гостей

-------------------
# **Компоненты системы**
Используемые технологии:
* PHP 7.3.21
* JavaScript
* MySQL 14.4
* JQuery 3.4.1
* Bootstrap 4.5.2

--------
# **Схема базы данных**
Схема таблицы авторизации
![tevCxOcqgh0](img/BUE6vkj11io.jpg)

Схема таблицы данных об объявлении
![9OrlDBBp0h8](img/ICW6f6Rd9r0.jpg)
