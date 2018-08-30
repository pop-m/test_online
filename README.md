# 在线考试系统

#### 项目介绍
这时一个团队项目，可以实现动人同时在线考试

#### 软件架构
此系统是基于windows平台下使用php,并使用bootstrap前端框架开发的一套在线考试系统

#### 运行环境
windows + Apache24 + SQL Server2017

#### 所用语言
后端:php7 + SQL

前端:html+css+javascript


#### 安装教程

1. 首先官网安装Apache14版本，SQL Server2008以上的版本，php7及以上版本
2. 首先配置Apache配置文件，内容由：主页路径，访问的权限，php的路径（网上都有，很简单的）
3. 在SQL Server官网上下载的php的pdo扩展配置文件。注意：php是ts还是nts的
4. 环境搭好测试正常之后将源代码放到Apache配置的指定的目录下

#### 使用说明

1. 刚装上的数据库应该没有数据，需要使用SQL_script.sql来创建最初始的数据库
2. 使用浏览器访问搭建好的网站即可，通过注册和登陆即可进行在线考试
3. 默认数据库中有管理员用户，使用管理员用户在管理员登入口登陆之后可以对题库进行操作