USE [master]
GO
/****** Object:  Database [db_online]    Script Date: 2018/8/30 0:01:14 ******/
CREATE DATABASE [db_online]

USE [db_online]
GO
/****** Object:  Table [dbo].[tb_admin]    Script Date: 2018/8/30 0:01:14 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_admin](
	[admin] [varchar](20) NULL,
	[adminpass] [varchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_grade]    Script Date: 2018/8/30 0:01:15 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_grade](
	[usr_name] [varchar](50) NOT NULL,
	[grade] [int] NULL,
	[kt_lx] [varchar](20) NULL,
	[kt_lb] [varchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_kt]    Script Date: 2018/8/30 0:01:15 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_kt](
	[kt_id] [int] NULL,
	[kt_lb] [varchar](50) NULL,
	[kt_lx] [varchar](10) NULL,
	[kt_fs] [int] NULL,
	[kt_nr] [varchar](2000) NOT NULL,
	[anw1] [varchar](100) NOT NULL,
	[anw2] [varchar](100) NOT NULL,
	[anw3] [varchar](100) NOT NULL,
	[anw4] [varchar](100) NOT NULL,
	[kt_zqdaan] [varchar](2000) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_usr]    Script Date: 2018/8/30 0:01:15 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_usr](
	[online_usr] [varchar](50) NOT NULL,
	[online_pass] [varchar](50) NOT NULL,
 CONSTRAINT [PK_tb_usr] PRIMARY KEY CLUSTERED 
(
	[online_usr] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[tb_admin] ([admin], [adminpass]) VALUES (N'admin', N'123123')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'可爱的小红', 40, N'C语言', N'计算机类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'可爱的小红', 0, N'C语言', N'计算机类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'miao', 0, N'C语言', N'计算机类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'马文征1', 100, N'C语言', N'计算机类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'马文征1', 100, N'数学', N'理科类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'马文征1', 40, N'化学', N'理科类')
INSERT [dbo].[tb_grade] ([usr_name], [grade], [kt_lx], [kt_lb]) VALUES (N'可爱的小红', 0, N'C语言', N'计算机类')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (1, N'计算机类', N'C语言', NULL, N'C语言程序是由 ____构成的。', N'A)一些可执行语言', N'B)main函数', N'C)函数', N'D)包含文件中的第一个函数', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (2, N'计算机类', N'C++语言', NULL, N'关于C++与C语言的关系描述中,错误的是( )', N'A. C语言与C++是兼容的', N'B. C语言是C++的一个子集', N'C. C++和C语言都是面向对象的', N'D.C++对C语言进行了一些改进', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (3, N'计算机类', N'JAVA语言', NULL, N'编译Java Application 源程序文件将产生相应的字节码文件,这些字节码文件的扩展名', N'A.java', N'B..class', N'C..html', N'D..exe', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (4, N'计算机类', N'数据结构', NULL, N'在数据结构中,从逻辑上可以把数据结构分为（   ）', N'A.动态结构和静态结构', N'B.紧凑结构和非紧凑结构', N'C.线性结构和非线性结构', N'D.内部结构和外部结构', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (5, N'财会类', N'初级会计师', NULL, N'某公司出售专用设备一台，取得价款30万元(不考虑增值税)，发生清理费某公司出售专用设备一台，取得价款30万元(不考虑增值税)，发生清理费5万元(不考虑增值税)，该设备账面价值为22万元，不考虑其他因素，下列各项中，关于此项交易净损益会计处理结果表述正确的是( )', N'A营业外收入增加3万元', N'B营业外收入增加25万元', N'C营业外收入增加8万元', N'D营业外支出增加27万元 
', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (6, N'财会类', N'中级会计师', NULL, N'下列关于甲公司发生的交易或事项中,属于股份支付的是( )', N'A.向债权人发行股票以抵偿所欠贷款', N'B.向股东发放股票股利', N'C.向乙公司原股东定向发行股票取得乙公司 100%的股权', N'D.向高级管理人员授予股票期权', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (7, N'财会类', N'注册会计师', NULL, N'下列各项有关职工薪酬的会计处理中,正确的是()', N'A.与设定受益计划相关的当期服务成本应计入当期损益', N'B.与设定受益计划负债相关的利息费用应计入其他综合收益', N'C.与设定受益计划相关的过去服务成本应计入期初留存收益', N'D.因重新计量设定收益计划净负债产生的计算损失应计入当期损益', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (8, N'语言类', N'英语', NULL, N'He walked into the office and shook hands with a smiling man ________ Mr. Black.', N'A.naming', N'B.named', N'C.by named', N'D.calling', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (9, N'语言类', N'日语', NULL, N'彼は店へ行った。( )カメラを買った。', N'A、すると ', N'B、そして', N' C、しかし', N' D、それから', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (10, N'语言类', N'法语', NULL, N'As-tu mangé?', N'A. J’aime la France', N'B. J’aime la tour eiffel', N'C. J’aime le louvre', N'D. J’ai d?né', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (69, N'金融类', N'证券', NULL, N'下列关于连续交易的说法，不正确的是（　　）。', N'A. 在营业时间里订单匹配可以连续不断地进行', N'B. 交易过程中可以提供更多的市场价格信息', N'C. 交易一定是连续的', N'D. 两个投资者下达的买卖指令，只要符合成交条件就可以立即成交', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (12, N'语言类', N'德语', NULL, N'- hast du gegessen? ', N'A. Ich liebe Lernen ', N'B).Ich lerne gerne ', N'C. Ich gegessen.', N'D).Heute ist gut, sehr gut ', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (13, N'建筑类', N'注册建筑师', NULL, N'《房地产管理法》规定,超过出让合同约定的动工开发日期满一年未动工的,可以征收土', N'A.10%以下 ', N'B.15%以下 ', N'C.20%以下', N' D.25%以下', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (14, N'建筑类', N'注册建筑师', NULL, N'采用下列__方法可以增强粘结力,并增加砌体的强度和抗剪能力。', N'A.给砖浇水 ', N'B.水泥砂浆 ', N'C.混合砂浆', N' D.添加有机塑化剂的水泥砂浆', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (15, N'建筑类', N'注册建筑师', NULL, N'工程场地测量坐标用x、y表示,以下__概念是正确的。', N'A.x——南北方向轴线 y——冻西方向轴线', N' B.x——东西方向轴线 y——南北方向轴线', N'C.x——在y纵轴上的距离 y——在x横轴上的距离', N' D.x——纬度值 y——经度值', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (16, N'建筑类', N'造价员', NULL, N'由人工费、材料费和机械使用费组成的土建工程直接费中,材料费所占的百分数为多少', N'A.85%-90%', N' B.40%-50% ', N'C.75%-80% ', N'D.60%-70%', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (17, N'金融类', N'证券', NULL, N'凯恩斯主义认为,货币政策的传导变量是（）', N'A.货币供应量', N' B.超额储备 ', N'C.基础货币', N' D.利率', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (18, N'金融类', N'期货', NULL, N'如果人们预期利率上升,则（）', N'A.卖出债券、多存货币 ', N'B.少存货币、多买债券 ', N'C.多买债券、少存货币 ', N'D.少买债券、少存货币', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (19, N'金融类', N'期货', NULL, N'我们在研究货币需求量时,应把(   )结合起来考查。', N'A. 静态与动态', N' B. 存量与流量', N' C. 增量与缩量', N' D. 购量与销量', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (20, N'金融类', N'期货', NULL, N'如果财政有赤字,货币供应量的变动状况是(   )', N'A.增加', N' B. 减少', N' C.不确定 ', N'D. 不变', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (21, N'理科类', N'物理', NULL, N'对于沿仰角θ以初速度 v0 斜向上抛出的物体,以下说法中正确的是:（）', N'(A)物体从抛出至到达地面的过程,其切向加速度保持不变', N'(B)物体从抛出至到达地面的过程,其法向加速度保持不变', N'(B)物体从抛出至到达地面的过程,其法向加速度保持不变', N'(D)物体通过最高点之后,其切向加速度越来越小', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (22, N'理科类', N'信息科学', NULL, N'1MB等于( )', N'A)1000字节 ', N'B)1024字节', N' C)1000╳1000字节', N' D)1024╳1024字节', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (23, N'理科类', N'数学', NULL, N'已知实数a、b、c满足a+b+c=0,abc=4,则 1/a + 1/b + 1/c 的值( ).', N'A.是正数', N' B.是负数 ', N'C.是零', N'D.是非负数', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (24, N'理科类', N'化学', NULL, N'生产生活中的下列含铁物质属于氧化物的是( )', N'A生铁', N' B. 氧化亚铁', N'C. 铁水', N'D. 磁铁矿', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (25, N'计算机类', N'C语言', NULL, N'以下说法中正确的是( )。', N'A.C语言程序总是从第一个的函数开始执行', N'B.在C语言程序中,要调用的函数必须在main()函数中定义', N'C.C语言程序总是从main()函数开始执行', N'D.C语言程序中的main()函数必须放在程序的开始部分', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (26, N'计算机类', N'C语言', NULL, N'C语言规定,在一个源程序中,main函数的位置( )。', N'A.必须在最开始', N'B.必须在系统调用的库函数的后面', N'C.可以任意', N'D.必须在最后', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (27, N'计算机类', N'C语言', NULL, N'以下说法中正确的是( )。', N'A.#define 和printf都是C语言语句', N'B.#define 是C语言语句,而printf不是', N'C.printf是C语言语句,而#define 不是', N'D.#define 和printf都不是C语言语句', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (28, N'计算机类', N'C语言', NULL, N'若要表示a不等于0的关系,则能正确表示这一关系的表达式为()。', N'A.a < > 0', N'B.!a', N'C.a=0', N'D.a!=0', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (29, N'计算机类', N'JAVA语言', NULL, N'编译Java Application 源程序文件将产生相应的字节码文件,这些字节码文件的扩展名', N'A. java', N'B. .class', N'C. html', N'D. .exe', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (30, N'计算机类', N'JAVA语言', NULL, N'设 x = 1 , y = 2 , z = 3,则表达式 y+=z--/++x 的值是( )。', N'A. 3', N'B. 3. 5', N'C. 4', N'D. 5', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (31, N'计算机类', N'JAVA语言', NULL, N'不允许作为类及类成员的访问控制符的是( )。', N'A. public', N'B. private', N'C. static', N'D. protected', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (32, N'计算机类', N'JAVA语言', NULL, N'为AB类的一个无形式参数无返回值的方法method书写方法头,使得使用类名AB作为前缀', N'A. static void method( )', N'B. public void method( )', N'C. final void method( )', N'D. abstract void method( )', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (33, N'计算机类', N'C++语言', NULL, N'C++源程序文件的默认扩展名为(   )。', N'A. cpp ', N'B. exe', N' C. obj ', N'D. lik', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (34, N'计算机类', N'C++语言', NULL, N'由C++源程序文件编译而成的目标文件的默认扩展名为(   )。', N'A. cpp ', N'B. exe ', N'C. obj ', N'D. lik', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (35, N'计算机类', N'C++语言', NULL, N'由C++目标文件连接而成的可执行文件的默认扩展名为(   )。', N'A. cpp', N' B. exe', N' C. obj ', N'D. lik', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (36, N'计算机类', N'C++语言', NULL, N'能作为C++程序的基本单位是(   )。', N'A.字符', N'B. 语句', N'C. 函数', N'D. 源程序文件', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (37, N'计算机类', N'数据结构', NULL, N'在数据结构中,从逻辑上可以把数据结构分为', N'A.动态结构和静态结构', N'B.紧凑结构和非紧凑结构', N'C.线性结构和非线性结构', N'D.内部结构和外部结构', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (38, N'计算机类', N'数据结构', NULL, N'数据结构在计算机内存中的表示是指', N'A.数据的存储结构', N'B.数据结构', N'C.数据的逻辑结构', N'D.数据元素之间的关系', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (39, N'计算机类', N'数据结构', NULL, N'在数据结构中,与所使用的计算机无关的是数据的 ____结构。', N'A.逻辑 ', N'B.存储', N' C.逻辑和存储', N' D.物理', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (40, N'计算机类', N'数据结构', NULL, N'在存储数据时,通常不仅要存储各数据元素的值,而且还要存储____', N'A.数据的处理方法', N'B.数据元素的类型', N'C.数据元素之间的关系', N'D.数据的存储方法', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (41, N'财会类', N'初级会计师', NULL, N'下列各项中,不属于政府补助的是( )。', N'A.企业因购买环保设备取得的财政补助拨款', N'B.企业享受的地方财政贴息补助', N'C.小微企业获得的财政扶持资金', N'D.企业收到政府作为所有者的资本投入', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (42, N'财会类', N'初级会计师', NULL, N'下列各项中，应根据相应总账科目的余额直接在资产负债表中填列的是()。', N'A.短期借款', N'B.固定资产', N'C.长期借款', N'D.应收账款 ', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (43, N'财会类', N'初级会计师', NULL, N'下列各项中,不应计入企业管理费用的是()。', N'A.计提的生产车间职工养老保险费', N'B.发生的内部控制建设咨询费用', N'C.应向董事会成员支付的津贴', N'D.发生的会计师事务所审计费', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (44, N'财会类', N'初级会计师', NULL, N'下列各项中,事业单位按规定对无形资产进行摊销的会计处理正确的是()。', N'A.借记“事业支出”科目,贷记“无形资产”科目', N'B.借记“非流动资产基金——无形资产”科目,贷记“累计摊销”科目', N'C.借记“非流动资产基金——无形资产”科目,贷记“无形资产”科目', N'D.借记“事业支出”科目,贷记“累计摊销”科目', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (45, N'财会类', N'中级会计师', NULL, N'企业发生的下列各项融资费用中,不属于借款费用的是( )。', N'A.股票发行费用', N'B.长期借款的手续费', N'C.外币借款的汇兑差额', N'D.溢价发行债券的利息调整', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (46, N'财会类', N'中级会计师', NULL, N'根据《企业会计准则一投资性房地产》,下列项目不属于投资性房房地产的是( )', N'A、以经营租赁方式租入后再转租的建筑物', N' B、已出租的土地使用权', N'C、已出租的建筑物', N'D、持有并准备增值后转让的土地使用权', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (47, N'财会类', N'中级会计师', NULL, N'2015年12月31日，甲事业单位完成非财政专项资金拨款支持的开发项目，上级部门批准将项目结余资金70万元留归该单位使用。当日，该单位应将该笔结余资金确认为( )。', N'A.单位结余', N' B.事业基金 ', N'C.非财政补助收入', N' D.专项基金', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (48, N'财会类', N'中级会计师', NULL, N'甲公司以人民币作为记账本位币，对期末存货按成本与可变现净值孰低计价。2015年5月1日，甲公司进口一批商品，价款为200万美元，当日即期汇率为1美元=6.1人民币元。2015年12月31日，甲公司该批商品中仍有50%尚未出售，可变现净值为90万美元，当日即期汇率为1美元=6.2人民币元。不考虑其他因素，2015年12月31日，该批商品期末计价对甲公司利润总额的影响金额为( )万人民币元。', N'A.减少104', N'B.增加104', N'C.增加52', N'D.减少52', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (49, N'财会类', N'注册会计师', NULL, N'下列各组资产和负债中,允许以净额在资产负债表上列示的是()。', N'A.作为金融负债担保物的金融资产和被担保的金融负债', N'B.与交易方明确约定定期以净额结算的应收款项和应付款项', N'C.因或有事项需承担的义务和基本确定可获得的第三方赔偿', N'D.基础风险相同但涉及不同交易对手的远期合同中的金融资产和金融负债', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (50, N'财会类', N'注册会计师', NULL, N'甲公司2X15年3月20日披露2X14年财务报告。2X15年3月3日，甲公司收到所在地政府于3月1日发布的通知，规定自2X13年6月1日起，对装机容量在2.5万千瓦及以上有发电收入的水库和水电站，按照上网电量8厘/千瓦时征收库区基金。按照该通知界定的征收范围，甲公司所属已投产电站均需缴纳库区基金。不考虑其他印务，下列关于甲公司对上述事项会计处理的表述中，正确是()。', N'A.作为2×15年发生的事项在2×15年财务报表中进行会计处理', N'B.作为会计政策变更追溯调整2×14年财务报表的数据并调整相关的比较信息', N'C.作为重大会计差错追溯重述2×14年财务报表的数据并重述相关的比较信息', N'D.作为资产负债表日后调整事项调整2×14年财务报表的当年发生数及年末数', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (51, N'财会类', N'注册会计师', NULL, N'甲公司自2x10年开始，受政府委托进口医药类特种丙原料，再将丙原料销售给国内生产企业，加工出丁产品并由政府定价后销售给最终用户，由于国际市场上丙原料的价格上涨，而国内丁产品的价格保持不变，形成进销价格倒挂的局面。2x14年之前，甲公司销售给生产企业的丙原料以进口价格为基础定价，国家财政弥补生产企业产生的进销差价；2x14年以后，国家为规范管理，改为限定甲公司对生产企业的销售价格，然后由国家财政弥补甲公司的进销差价。不考虑其他因素，从上述交易的实质判断，下列关于甲公司从政府获得进销差价弥补的会计处理中，正确的是（ ）。 ', N'A.确认为与销售丙原料相关的营业收入', N'B.确认为与收益相关的政府补助,直接计入当期营业外收入', N'C.确认为所有者的资本性投入计入所有者权益', N'D.确认为与资产相关的政府补助,并按照销量比例在各期分摊计入 营业外收入', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (52, N'财会类', N'注册会计师', NULL, N'下列各项有关投资性房地产会计处理的表述中,正确的是()', N'A.以成本模式后续计量的投资性房地产转换为存货,存货应按转换 日的公允价值计量,', N'B.以成本模式后续计量的投资性房地产转换为自用固定资产,自用固定资产应按转换日', N'C.以存货转换为以公允价值模式后续计量的投资性房地产,投资性房地产应按转换日的', N'D.以公允价值模式后续计量的投资性房地产转换为自用固定资产,自用固定资产应按转', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (53, N'语言类', N'英语', NULL, N'Lily was so ___looking at the picture that she forgot the time.', N'A,carefully ', N'B,careful ', N'C,busily ', N'D,busy ', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (54, N'语言类', N'英语', NULL, N'Putting paper cuts on the windows ______ good luck. ', N'A.means', N'B.meaning', N'C.to mean', N'D.mean', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (55, N'语言类', N'英语', NULL, N'Look!Tony is wearing a_______coat! ', N'A.beautiful long red ', N'B.long red beautiful', N'C.red beautifuo long ', N'D.long beautiful red ', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (56, N'语言类', N'英语', NULL, N'Tom, you must __________ your things. ', N'A. look ', N'B. look at ', N'C. look after ', N'D. look like ', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (57, N'语言类', N'日语', NULL, N'.げんかんの　かべに　ぼうしが　(　　)あります。', N'A.はって', N'B.かけて', N'C.かざって', N'D.おいて', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (58, N'语言类', N'日语', NULL, N'.かのじょは　かおが　おとうさんに　よく　(　　)。', N'A.にています', N'B.つたえています', N'C.おなじです', N'D.あっています', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (59, N'语言类', N'日语', NULL, N'18さい　(　　)は　おとなの　きっぷを　かってください。', N'A.いか', N'B..いじょう', N'C.いない', N'D.いがい', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (60, N'语言类', N'日语', NULL, N'これは、そつぎょうの　とき、　せんせいに　(　　)じしょです。', N'A.よまねた', N'B.くださった', N'C.いただいた', N'D.まいった', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (61, N'语言类', N'法语', NULL, N'___enfants,c''est ___ l''espoir de demain.
', N'A.Des;l'' ', N'B.Des;un', N'C.Les;un.', N'D.Les;l''', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (62, N'语言类', N'法语', NULL, N'Il faut confier ce travail à ___', N'A. personne de compétent', N'B. personne compétente', N'C. quelqu’un compétent', N'D. quelqu’un de compétent', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (63, N'语言类', N'法语', NULL, N'Notre grand-père est unancien combattant, il a ___ à la guerre de Libération.', N'A. assisté ', N'B. lutté', N'C. combattu', N'D. participé', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (64, N'语言类', N'法语', NULL, N'Aujourd’hui, c’est mon frère qui fait la cuisine, j’ai ___ de la go?ter.', N'A. impatiente', N'B. hate', N'C. intention ', N'D. précipitation', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (65, N'语言类', N'德语', NULL, N'Es gibt keinen ______ Apfelkuchen als den,den meine Mutter backt．', N'A．guten', N'B．besten ', N'C．besseren ', N'D．besser', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (66, N'语言类', N'德语', NULL, N'Hast du deiner Mutter schon ______ Geburtstag gratuliert?', N'A．für den', N'B．zum', N'C．beim', N'D．auf den', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (67, N'语言类', N'德语', NULL, N'Nach der Arbeit gingen wir noch ein Bier trinken．Ein ______ Kollege hat uns eingeladen．', N'A．neue', N'B．neuen ', N'C．neu', N'D．neuer　', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (68, N'语言类', N'德语', NULL, N'Das Geld ist auf Ihr Konto überwiesen______．', N'A．worden', N' B．werden', N'C．wurden', N'D．geworden', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (70, N'金融类', N'证券', NULL, N'次级债务是指由银行发行的，固定期限（　　），除非银行倒闭或清算不用于弥补银行日常经营损失，且该项债务的索偿权排在存款和其他负债之后的商业银行长期债务。', N'A. 不低于5年(包括5年)', N'B. 不低于3年(包括3年)', N'C. 不低于5年(不包括5年)', N'D. 不低于3年(不包括3年)', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (71, N'金融类', N'证券', NULL, N'证券（　　）后，行情信息中无该证券的信息。', N'A. 停牌', N'B. 复牌', N'C. 摘牌', N'D. 挂牌', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (72, N'金融类', N'证券', NULL, N'清算组由人民法院依据有关法律的规定，组织股东、有关机关及有关专业人士组成。所谓有关机关一般包括（　　）等。', N'A. 国有资产管理部门', N'B. 政府主管部门', N'C. 证券管理部门', N'D. 工商部门', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (73, N'金融类', N'期货', NULL, N'1975年10月，芝加哥期货交易所上市（）期货合约，从而成为世界上第一个推出利率期货合约的交易所。 ', N'A: 政府国民抵押协会抵押凭证 ', N'B: 标准普尔指数期货合约 ', N'B: 标准普尔指数期货合约 ', N': 价值线综合指数期货合约 ', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (74, N'金融类', N'期货', NULL, N'期货合约与现货合同、现货远期合约的最本质区别是（）。', N'A: 期货价格的超前性 ', N'A: 期货价格的超前性 ', N'A: 期货价格的超前性 ', N'D: 期货合约条款的标准化 ', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (75, N'理科类', N'物理', NULL, N'下列四种现象中属于扩散现象的是()', N'A．我国北方地区频发“沙尘暴天气”', N'B．春天柳絮漫天飞舞', N'C．气体压缩到一定程度后，难以再压缩', N'D．端午节，粽叶飘香', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (76, N'理科类', N'物理', NULL, N'下列说法中正确的是（　　）', N'A．水和酒精混合后的体积小于原来的体积之和，说明分子间有空隙；正是由于分子间有空隙，才可以将物体压缩', N'B．分子间引力和斥力同时存在，分子力指引力和斥力的合力', N'C.分子间具有斥力', N'D．弹簧被拉伸或被压缩时表现的弹力，正是分子引力和斥力的对应表现 
', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (77, N'理科类', N'物理', NULL, N'两铁块相互接触时无热传递,说明它们具有相同的()', N'A．内能', N'B．热量', N'C．分子平均动能', N'D．分子势能', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (78, N'理科类', N'物理', NULL, N'下列关于能量的转化和守恒的说法中错误的是（　　）', N'A. 高山上滚下的石块越来越快，说明重力势能转化为动能', N'B. 酒精燃烧时，将化学能转化为内能', N'C. 发电机发电时，将机械能转化为电能', N'D. 人们对太阳能的开发和利用，说明能量可以凭空产生 ', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (79, N'理科类', N'信息科学', NULL, N'对于信息，下列说法不正确的是（   ）', N'对于信息，下列说法不正确的是（   ）', N'B.信息必须寄存在某种传播媒体中,如纸张、声波等。', N'C.信息必须以某种记录形式表示出来,如语音、文字、符号声音等。', N'C.信息必须以某种记录形式表示出来,如语音、文字、符号声音等。', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (80, N'理科类', N'信息科学', NULL, N'计算机硬盘属于( )。', N' (A) 外存储器 ', N'(B)输出设备', N' (C) 内存储器 ', N'(D) 输入设备', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (81, N'理科类', N'信息科学', NULL, N'打印机属于( )。', N' (A) 输出设备 ', N'(B) 外存储器 ', N'(C) 内存储器', N'(D) 输入设备', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (82, N'理科类', N'信息科学', NULL, N'常用的浏览器软件是( )', N'(A) Internet EXplore ', N'(B) 文字处理软件 ', N'(C) 动画处理软件 ', N'(D) 邮件收发软件', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (83, N'理科类', N'数学', NULL, N'已知实数a、b满足（a+b）2=1和（a-b）2=25，则a2+b2+ab=______．', N'A.7', N'B.9', N'C.5', N'D.14', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (84, N'理科类', N'数学', NULL, N'已知等腰三角形的周长是63cm，以一腰为边作等边三角形，其周长为69cm，那么等腰三角形的底边长是 ', N'A、23cm ', N'B、17 cm', N'C、21 cm', N'D、6 cm ', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (85, N'理科类', N'数学', NULL, N'下列图形中，有无数条对称轴的是 ', N'A、等边三角形', N'B、平行四边形', N'C、等腰梯形', N'D、圆 ', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (86, N'理科类', N'数学', NULL, N'已知方程3x+a=2的解是5，则a的值是', N'A、—13', N'B、—17 ', N'C、13', N'D、17 ', N'A')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (87, N'理科类', N'化学', NULL, N'下列关于分子、原子的叙述错误的是（ ）', N'A、分子是不断运动的 ', N'B、分子和原子都可以构成物质', N'C、分子式化学变化中的最小微粒', N'D、原子的种类和个数在化学变化的前后保持不变', N'C')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (88, N'理科类', N'化学', NULL, N'20世纪26年代，就有人预言可能存在由4个氧原子组成的氧分子(O4)，但一直没有得到证实。最近，意大利一所大学的科学家使用普通氧分子和带正电的氧离子制造出了这种新型氧分子，并用质谱仪探测到了它的存在。下列叙述中正确的是（   ）', N'A．O4是一种新型的化合物 ', N' B．一个O4分子中含有2个O2分子', N'C．O4和O2的性质完全相同', N'D．O4和O2混合形成的是混合物', N'D')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (89, N'理科类', N'化学', NULL, N'下列化学用语既能表示一种元素，又能表示一个原子，还能表示一种物质的是（    ）', N' A．O', N'B．Zn', N'C．N2', N'D．CO', N'B')
INSERT [dbo].[tb_kt] ([kt_id], [kt_lb], [kt_lx], [kt_fs], [kt_nr], [anw1], [anw2], [anw3], [anw4], [kt_zqdaan]) VALUES (90, N'理科类', N'化学', NULL, N'碳和镁的相对原子质量分别是12和24，则碳和镁的原子质量之比为(     )', N'A.12:1 ', N'B.2:12 ', N'C.2:1   ', N'D.1:2', N'D')
INSERT [dbo].[tb_usr] ([online_usr], [online_pass]) VALUES (N'miao', N'123123')
INSERT [dbo].[tb_usr] ([online_usr], [online_pass]) VALUES (N'可爱的小红', N'123456')
INSERT [dbo].[tb_usr] ([online_usr], [online_pass]) VALUES (N'马文征1', N'123123')
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'管理员名称' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'tb_admin', @level2type=N'COLUMN',@level2name=N'admin'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'管理员密码' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'tb_admin', @level2type=N'COLUMN',@level2name=N'adminpass'
GO
USE [master]
GO
ALTER DATABASE [db_online] SET  READ_WRITE 
GO
