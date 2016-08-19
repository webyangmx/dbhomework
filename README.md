# dbmanage
基于thinkphp框架的管理数据库网站

## 导入操作

1. php运行环境，本人使用xampp，另外还需要mysql
2. 下载代码并部署
3. 将代码中的.sql脚本导入mysql数据库并执行，里面包含创建数据库、数据表、导入已有数据脚本
4. 运行apache服务器，浏览器输入localhost/dbmanage-master  

## 介绍  

后台使用开源[thinkphp框架](http://www.thinkphp.cn/)，前端使用jquery和原生css，部分功能使用mysql数据库的触发器和存储过程实现，另外还用到了用于数据可视化的库[highcharts](http://new.hcharts.cn/)，该网站主要获取数据库数据并展示，也可通过具体后台接口获取某商品的销售情况然后用highcharts可视化展现，由于是在短时间内完成，功能较单一。最后附上一张小截图  

PS:设计图来源于[优设网](http://www.uisdc.com/)  

### 网站截图
![image](https://raw.githubusercontent.com/webyangmx/dbhomework/master/screenshot/screenshot.jpg)

