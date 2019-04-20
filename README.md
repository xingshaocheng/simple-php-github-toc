# simple-php-github-toc

A simple script to create github toc

生成 Github Readme 文件 TOC 目录 的简单脚本

## Usage - 用法


```shell
$ wget https://raw.githubusercontent.com/xingshaocheng/simple-php-github-toc/master/github-toc.php .
$ php github-toc.php https://github.com/xingshaocheng/architect-awesome/blob/master/README.md
```


```

* [数据结构](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据结构)
	* [队列](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#队列)
	* [集合](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#集合)
	* [链表、数组](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#链表数组)
	* [字典、关联数组](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#字典关联数组)
	* [栈](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#栈)
	* [树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#树)
		* [二叉树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#二叉树)
		* [完全二叉树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#完全二叉树)
		* [平衡二叉树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#平衡二叉树)
		* [二叉查找树（BST）](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#二叉查找树bst)
		* [红黑树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#红黑树)
		* [B-，B+，B*树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#b-bb树)
		* [LSM 树](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#lsm-树)
	* [BitSet](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#bitset)
* [常用算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#常用算法)
	* [排序、查找算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#排序查找算法)
		* [选择排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#选择排序)
		* [冒泡排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#冒泡排序)
		* [插入排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#插入排序)
		* [快速排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#快速排序)
		* [归并排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#归并排序)
		* [希尔排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#希尔排序)
		* [堆排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#堆排序)
		* [计数排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#计数排序)
		* [桶排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#桶排序)
		* [基数排序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#基数排序)
		* [二分查找](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#二分查找)
		* [Java 中的排序工具](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#java-中的排序工具)
	* [布隆过滤器](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#布隆过滤器)
	* [字符串比较](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#字符串比较)
		* [KPM 算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#kpm-算法)
	* [深度优先、广度优先](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#深度优先广度优先)
	* [贪心算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#贪心算法)
	* [回溯算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#回溯算法)
	* [剪枝算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#剪枝算法)
	* [动态规划](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#动态规划)
	* [朴素贝叶斯](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#朴素贝叶斯)
	* [推荐算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#推荐算法)
	* [最小生成树算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#最小生成树算法)
	* [最短路径算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#最短路径算法)
* [并发](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#并发)
	* [多线程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#多线程)
	* [线程安全](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#线程安全)
	* [一致性、事务](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#一致性事务)
		* [事务 ACID 特性](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#事务-acid-特性)
		* [事务的隔离级别](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#事务的隔离级别)
	* [锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#锁)
		* [Java中的锁和同步类](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#java中的锁和同步类)
		* [公平锁 &amp; 非公平锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#公平锁--非公平锁)
		* [悲观锁 &amp; 乐观锁 &amp; CAS](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#悲观锁--乐观锁--cas)
		* [ABA 问题](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#aba-问题)
		* [CopyOnWrite容器](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#copyonwrite容器)
		* [RingBuffer](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ringbuffer)
		* [可重入锁 &amp; 不可重入锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#可重入锁--不可重入锁)
		* [互斥锁 &amp; 共享锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#互斥锁--共享锁)
		* [死锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#死锁)
* [操作系统](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#操作系统)
	* [计算机原理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#计算机原理)
	* [进程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#进程)
	* [线程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#线程)
	* [协程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#协程)
	* [Linux](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#linux)
* [设计模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#设计模式)
	* [设计模式的六大原则](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#设计模式的六大原则)
	* [23种常见设计模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#23种常见设计模式)
	* [应用场景](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#应用场景)
	* [单例模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#单例模式)
	* [责任链模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#责任链模式)
	* [MVC](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#mvc)
	* [IOC](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ioc)
	* [AOP](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#aop)
	* [UML](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#uml)
	* [微服务思想](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#微服务思想)
		* [康威定律](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#康威定律)
* [运维 &amp; 统计 &amp; 技术支持](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#运维--统计--技术支持)
	* [常规监控](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#常规监控)
	* [APM](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#apm)
	* [统计分析](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#统计分析)
	* [持续集成(CI/CD)](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#持续集成cicd)
		* [Jenkins](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#jenkins)
		* [环境分离](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#环境分离)
	* [自动化运维](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#自动化运维)
		* [Ansible](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ansible)
		* [puppet](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#puppet)
		* [chef](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#chef)
	* [测试](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#测试)
		* [TDD 理论](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#tdd-理论)
		* [单元测试](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#单元测试)
		* [压力测试](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#压力测试)
		* [全链路压测](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#全链路压测)
		* [A/B Test](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ab-test)
	* [虚拟化](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#虚拟化)
		* [KVM](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#kvm)
		* [Xen](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#xen)
		* [OpenVZ](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#openvz)
	* [容器技术](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#容器技术)
		* [Docker](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#docker)
	* [云技术](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#云技术)
		* [OpenStack](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#openstack)
	* [DevOps](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#devops)
	* [文档管理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#文档管理)
* [中间件](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#中间件)
	* [Web Server](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#web-server)
		* [Nginx](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#nginx)
		* [OpenResty](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#openresty)
		* [Apache Httpd](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#apache-httpd)
		* [Tomcat](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#tomcat)
			* [架构原理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#架构原理)
			* [调优方案](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#调优方案)
		* [Jetty](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#jetty)
	* [缓存](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#缓存)
		* [本地缓存](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#本地缓存)
	* [客户端缓存](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#客户端缓存)
		* [Memcached](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#memcached)
		* [Redis](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#redis)
			* [架构](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#架构)
			* [回收策略](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#回收策略)
		* [Tair](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#tair)
	* [消息队列](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#消息队列)
		* [消息总线](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#消息总线)
		* [消息的顺序](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#消息的顺序)
		* [RabbitMQ](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#rabbitmq)
		* [RocketMQ](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#rocketmq)
		* [ActiveMQ](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#activemq)
		* [Kafka](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#kafka)
		* [Redis 消息推送](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#redis-消息推送)
		* [ZeroMQ](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#zeromq)
	* [定时调度](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#定时调度)
		* [单机定时调度](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#单机定时调度)
		* [分布式定时调度](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式定时调度)
	* [RPC](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#rpc)
		* [Dubbo](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#dubbo)
		* [Thrift](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#thrift)
		* [gRPC](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#grpc)
	* [数据库中间件](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据库中间件)
		* [Sharding Jdbc](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#sharding-jdbc)
	* [日志系统](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#日志系统)
		* [日志搜集](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#日志搜集)
	* [配置中心](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#配置中心)
	* [API 网关](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#api-网关)
* [网络](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#网络)
	* [协议](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#协议)
		* [OSI 七层协议](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#osi-七层协议)
		* [TCP/IP](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#tcpip)
		* [HTTP](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#http)
		* [HTTP2.0](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#http20)
		* [HTTPS](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#https)
	* [网络模型](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#网络模型)
		* [Epoll](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#epoll)
		* [NIO](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#nio)
		* [kqueue](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#kqueue)
	* [连接和短连接](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#连接和短连接)
	* [框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#框架)
	* [零拷贝（Zero-copy）](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#零拷贝zero-copy)
	* [序列化(二进制协议)](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#序列化二进制协议)
		* [Hessian](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#hessian)
		* [Protobuf](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#protobuf)
* [数据库](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据库)
	* [基础理论](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#基础理论)
		* [数据库设计的三大范式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据库设计的三大范式)
	* [MySQL](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#mysql)
		* [原理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#原理)
		* [InnoDB](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#innodb)
		* [优化](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#优化)
		* [索引](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#索引)
			* [聚集索引, 非聚集索引](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#聚集索引-非聚集索引)
			* [复合索引](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#复合索引)
			* [自适应哈希索引(AHI)](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#自适应哈希索引ahi)
		* [explain](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#explain)
	* [NoSQL](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#nosql)
		* [MongoDB](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#mongodb)
		* [Hbase](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#hbase)
* [搜索引擎](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#搜索引擎)
	* [搜索引擎原理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#搜索引擎原理)
	* [Lucene](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#lucene)
	* [Elasticsearch](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#elasticsearch)
	* [Solr](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#solr)
	* [sphinx](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#sphinx)
* [性能](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#性能)
	* [性能优化方法论](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#性能优化方法论)
	* [容量评估](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#容量评估)
	* [CDN 网络](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#cdn-网络)
	* [连接池](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#连接池)
	* [性能调优](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#性能调优)
	* [流式计算](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#流式计算)
		* [Storm](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#storm)
		* [Flink](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#flink)
		* [Kafka Stream](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#kafka-stream)
		* [应用场景](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#应用场景-1)
	* [Hadoop](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#hadoop)
		* [HDFS](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#hdfs)
		* [MapReduce](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#mapreduce)
		* [Yarn](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#yarn)
	* [Spark](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#spark)
* [安全](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#安全)
	* [web 安全](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#web-安全)
		* [XSS](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#xss)
		* [CSRF](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#csrf)
		* [SQL 注入](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#sql-注入)
		* [Hash Dos](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#hash-dos)
		* [脚本注入](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#脚本注入)
		* [漏洞扫描工具](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#漏洞扫描工具)
		* [验证码](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#验证码)
	* [DDoS 防范](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ddos-防范)
	* [用户隐私信息保护](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#用户隐私信息保护)
	* [加密解密](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#加密解密)
		* [对称加密](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#对称加密)
		* [哈希算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#哈希算法)
		* [非对称加密](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#非对称加密)
	* [服务器安全](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#服务器安全)
	* [数据安全](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据安全)
		* [数据备份](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据备份)
	* [网络隔离](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#网络隔离)
		* [内外网分离](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#内外网分离)
		* [登录跳板机](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#登录跳板机)
	* [授权](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#授权)
		* [RBAC](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#rbac)
		* [OAuth2.0](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#oauth20)
* [常用开源框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#常用开源框架)
	* [开源协议](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#开源协议)
	* [日志框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#日志框架)
		* [Log4j、Log4j2](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#log4jlog4j2)
		* [Logback](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#logback)
	* [ORM](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#orm)
	* [网络框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#网络框架)
	* [Web 框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#web-框架)
		* [Spring 家族](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#spring-家族)
	* [工具框架](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#工具框架)
* [分布式设计](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式设计)
	* [扩展性设计](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#扩展性设计)
	* [稳定性 &amp; 高可用](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#稳定性--高可用)
		* [硬件负载均衡](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#硬件负载均衡)
		* [软件负载均衡](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#软件负载均衡)
		* [限流](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#限流)
		* [应用层容灾](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#应用层容灾)
		* [跨机房容灾](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#跨机房容灾)
		* [容灾演练流程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#容灾演练流程)
		* [平滑启动](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#平滑启动)
	* [数据库扩展](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#数据库扩展)
		* [读写分离模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#读写分离模式)
		* [分片模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分片模式)
	* [服务治理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#服务治理)
		* [服务注册与发现](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#服务注册与发现)
		* [服务路由控制](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#服务路由控制)
	* [分布式一致](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式一致)
		* [CAP 与 BASE 理论](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#cap-与-base-理论)
		* [分布式锁](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式锁)
		* [分布式一致性算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式一致性算法)
			* [PAXOS](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#paxos)
			* [Zab](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#zab)
			* [Raft](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#raft)
			* [Gossip](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#gossip)
			* [两阶段提交、多阶段提交](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#两阶段提交多阶段提交)
		* [幂等](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#幂等)
		* [分布式一致方案](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式一致方案)
		* [分布式 Leader 节点选举](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式-leader-节点选举)
		* [TCC(Try/Confirm/Cancel) 柔性事务](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#tcctryconfirmcancel-柔性事务)
	* [分布式文件系统](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#分布式文件系统)
	* [唯一ID 生成](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#唯一id-生成)
		* [全局唯一ID](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#全局唯一id)
	* [一致性Hash算法](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#一致性hash算法)
* [设计思想 &amp; 开发模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#设计思想--开发模式)
	* [DDD(Domain-driven Design - 领域驱动设计)](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#ddddomain-driven-design---领域驱动设计)
		* [命令查询职责分离(CQRS)](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#命令查询职责分离cqrs)
		* [贫血，充血模型](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#贫血充血模型)
	* [Actor 模式](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#actor-模式)
	* [响应式编程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#响应式编程)
	* [DODAF2.0](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#dodaf20)
	* [Serverless](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#serverless)
* [项目管理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#项目管理)
	* [架构评审](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#架构评审)
	* [重构](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#重构)
	* [代码规范](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#代码规范)
	* [RUP](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#rup)
	* [看板管理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#看板管理)
	* [SCRUM](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#scrum)
	* [极限编程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#极限编程)
	* [敏捷开发](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#敏捷开发)
	* [结对编程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#结对编程)
* [通用业务术语](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#通用业务术语)
* [技术趋势](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#技术趋势)
* [架构师素质](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#架构师素质)
* [团队管理](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#团队管理)
	* [招聘](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#招聘)
* [资讯](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#资讯)
	* [行业资讯](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#行业资讯)
	* [公众号列表](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#公众号列表)
	* [博客](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#博客)
		* [团队博客](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#团队博客)
		* [个人博客](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#个人博客)
	* [综合门户、社区](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#综合门户社区)
	* [问答、讨论类社区](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#问答讨论类社区)
	* [行业数据分析](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#行业数据分析)
	* [专项网站](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#专项网站)
	* [其他类](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#其他类)
	* [推荐参考书](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#推荐参考书)
		* [在线电子书](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#在线电子书)
		* [纸质书](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#纸质书)
			* [开发方面](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#开发方面)
			* [架构方面](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#架构方面)
			* [技术管理方面](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#技术管理方面)
			* [基础理论](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#基础理论-1)
			* [工具方面](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#工具方面)
			* [大数据方面](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#大数据方面)
* [技术资源](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#技术资源)
	* [开源资源](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#开源资源)
	* [手册、文档、教程](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#手册文档教程)
	* [在线课堂](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#在线课堂)
	* [会议、活动](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#会议活动)
	* [常用APP](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#常用app)
	* [找工作](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#找工作)
	* [工具](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#工具)
	* [代码托管](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#代码托管)
	* [文件服务](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#文件服务)
	* [综合云服务商](https://github.com/xingshaocheng/architect-awesome/blob/master/README.md#综合云服务商)
  
```
