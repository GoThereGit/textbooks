# 第5章 SQL查询

目录

## 5.2 简单的查询
```sql
select title from ts where author is "李白"
```

#### 图5-1
```sql
select `title` from `ts` where `author` = "李白"
```

#### 图5-2
```sql
select `title`, `poem` from `ts` where `author` = "李白"
```

#### 图5-3
```sql
select * from `ts` where `author` = "李白"
```

#### 图5-4
```sql
select * from `ts` where `author` like "%月%"
```

#### 图5-5
```sql
select * from `ts` where `author` like "%月%" and `author` = "李白"
```

#### 图5-6
```sql
select * from `ts` where `title` like "%月%" and  `poem` like "%月%"
```

#### 图5-7
```sql
select * from `ts` where `title` like "%月%" and (`author` = "李白" or
`author` ="杜甫")
```

## 5.4数据库与数据表的创建

### 5.4.2数据表的创建和删除

```sql
CREATE TABLE `ts`
(
    vol VARCHAR(20),
    author VARCHAR(50),
    title VARCHAR(255),
    poem TEXT
);
```

```sql
DROP TABLE ts;
```




## 5.5 数据的编辑

### 5.5.1 数据的插入

```sql
INSERT INTO table_name VALUES(v1, v2, ...);
```

```sql
INSERT INTO table_name (colum1, column2, ...) VALUES(value1, value2, ...);
```

```sql
INSERT INTO example (id, data) VALUES(1, 'Value 1'), (2, 'Value 2'), (3, 'Value 3');
```

#### 图5-16，图5-17，图5-18，图5-19，

### 5.5.2数据的更新

#### 图5-20，图5-21

```sql
INSERT INTO `ts` VALUES ("卷号", "标题", "作者", "正文")
```

#### 图5-22，图5-23

```sql
UPDATE `ts` SET `len` = LENGTH(`poem`)
```

### 5.5.3数据的删除

```sql
DELETE FROM `ts` WHERE ID = '1'
```

```sql
DELETE FROM `ts` WHERE author = '李白'
```

## 5.6 求串长
#### 图5-26，图5-27
```sql
SELECT LENGTH("ABC")
```

#### 图5-28

```sql
SELECT LENGTH("一二三")
```

#### 图5-29 图5-30

```sql
UPDATE `ts` SET `len` = LENGTH(`poem`) / 3
```

### 5.6.1 探寻诗歌为几言
#### 图5-31

```sql
SELECT INSTR(`poem, "，") - 1 FROM `ts`
```

#### 图5-34

```sql
UPDATE `ts` SET `form` = INSTR(`poem`, "，") - 1
```

#### 图5-37

```sql
UPDATE `ts` SET `lines` = LENGTH(`poem`) / (INSTR(`poem`, "，") + 1) / 3
```

#### 图5-39

```sql
UPDATE `ts` SET `lines` = LENGTH(`poem`) / (INSTR(`poem`, "，")
```

#### 图5-40，图5-41

```sql
SELECT LEFT(`poem`, INSTR(`poem`, "梅花")) FROM `ts` WHERE `poem` LIKE "%梅花%"
```

#### 图5-42，图5-43

```sql
SELECT RIGHT(`poem`, LENGTH(`poem`) / 3 - INSTR(`poem`, "梅花")) FROM `ts` WHERE `poem` LIKE "%梅花%"
```

#### 图5-44

```sql
SELECT LEFT(`poem`, INSTR(`poem`, "梅花")), RIGHT(`poem`, LENGTH(`poem`) / 3 - INSTR(`poem`, "梅花")) FROM `ts` WHERE `poem` LIKE "%梅花%"
```

#### 图5-45，图5-46

```sql
SELECT LEFT(`poem`, INSTR(`poem`, "梅花")), "梅花" AS `keyword`, RIGHT(`poem`, LENGTH(`poem`) / 3 - INSTR(`poem`, "梅花")) FROM `ts` WHERE `poem` LIKE "%梅花%"
```

#### 图5-53，图5-54

```sql
SELECT * FROM `pku` ORDER BY `freq` DESC
```

#### 图5-55，图5-56

```sql
SELECT * FROM `pku` WHERE LEFT(`word`, 1) = RIGHT(`word`, 1) AND LENGTH(`word`) = 6
```

#### 图5-57，图5-58

```sql
SELECT * FROM `pku`
    WHERE LEFT(`word`, 1) = SUBSTRING(`word`, 2, 1) 
    AND RIGHT (`word`, 1) = SUBSTRING(`word`, 3, 1) 
    AND LENGTH(`word`) = 12
```

#### 图5-59

```sql
SELECT SUM(`freq`) FROM `pku`
```

#### 图5-61

```sql
SELECT AVG(`freq`) FROM `pku`
```

#### 图5-63，图5-64

```sql
SELECT `pos`, COUNT(`pos`) AS `word_freq` FROM `pku` GROUP BY `pos` ORDER BY `word_freq` DESC
```

#### 图5-65

```sql
SELECT REVERSE(`word`) FROM `pku`
```

#### 图5-67

```sql
SELECT * FROM `pku` WHERE `word` = REVERSE(`word`) AND LENGTH(`word`) != 3 AND SUBSTRING(`word`, 1, 1) != SUBSTRING(`word`, 2, 1)
```

#### 图5-69

```sql
SELECT REVERSE(`word`) FROM `pku` WHERE REVERSE(`word`) IN (SELECT `word` FROM `pku`)
```

#### 图5-71

```sql
SELECT REVERSE(`word`) FROM `pku` WHERE REVERSE(`word`) IN (SELECT `word` from `pku`) AND LENGTH(`word`) >= 6 AND LEFT(`word`, 1) <> RIGHT(`word`, 1)
```

#### 图5-73，图5-74

```sql
SELECT DISTINCT REVERSE(`word`) FROM `pku` WHERE REVERSE(`word`) IN (SELECT `word` from `pku`) AND LENGTH(`word`) >= 6 AND LEFT(`word`, 1) <> RIGHT(`word`, 1)
```

#### 图5-75，图5-76

```sql
SELECT DISTINCT REVERSE (`word`) FROM `pku` WHERE REVERSE(`word`) IN (SELECT `word` from `pku`) AND LENGTH(`word`) >= 6 AND LEFT(`word`, 1) <> RIGHT(`word`, 1) AND `word` > REVERSE(`word`)
```

