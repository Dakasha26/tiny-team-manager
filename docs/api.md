**Авторизация, регистрация, восстановление пароля**

api | type | params | purpose 
--- | --- | --- | --- 
./api/authorization| POST |login, password | Авторизация пользователя через форму
./api/registration| POST | TODO: после проектирования | Регистрация пользователя 
./api/restorePassword | POST | login | Восстановление пароля


**/work**

api | type | params | purpose
--- | --- | --- | ---
./api/work/getTable| GET| tableName| Получение данных для заполнения таблицы   
./api/work/addInTable| POST| tableName, record| Добавление записи в таблицу
./api/work/editRecordInTable| PUT| tableName, recordId, newData| Изменение записи в таблице
./api/work/delRecordInTable| DELETE| tableName, recordId| Удаление записи в таблице


**Отчёты /work**

api | type | params | purpose
--- | --- | --- | ---
./api/work/getReportBestMembers| GET| - | Получение отчёта "Рейтинг бойцов отряда"
./api/work/getReportGroupActivity| GET | firstDay, lastDay | Получение отчёта "Активность отряда за период"
