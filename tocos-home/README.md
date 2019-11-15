https://estate.tocos-home.com/
======
Production server:
-       Host: sv7229.xserver.jp
-       User: tocoshome
-       Auth type: prod_tocoshome-2.key
-       Port: 10022
-       Passphrase for key: b3yupwd4

Test server:
-       Host: sv8827.xserver.jp
-       User: estatetocos
-       Auth type: test_estatetocos.key
-       Port: 10022
-       Passphrase for key: v73kpiyq_apple



SSH
======
Production server:
```
ssh-add -K ~/propolifejp/tocos-home/prod_tocoshome-2.key
ssh -i ~/propolifejp/tocos-home/prod_tocoshome-2.key tocoshome@sv7229.xserver.jp -p 10022
```

Test server:
```
ssh-add -K ~/propolifejp/tocos-home/test_estatetocos.key
ssh -i ~/propolifejp/tocos-home/test_estatetocos.key estatetocos@sv8827.xserver.jp -p 10022
```


MySQL
======
Production:
-       Host: mysql7023.xserver.jp
-       User: tocoshome_wp2
-       Password: 8l2mwerx9w
-       Database: tocoshome_wp2
```
mysql -h mysql7023.xserver.jp -u tocoshome_wp2 --password='8l2mwerx9w'
```

Backup database
======

```
mysqldump tocoshome_wp1 -h mysql7023.xserver.jp -u tocoshome_wp1 --password='2031bg2zc3' | gzip > /home/tocoshome/tocoshome_wp1.sql.gz

mysqldump tocoshome_wp2 -h mysql7023.xserver.jp -u tocoshome_wp2 --password='8l2mwerx9w' | gzip > /home/tocoshome/tocoshome_wp2.sql.gz
```
