SELECT * FROM `ts`;
select upper ('word');
select ascii('a');

SELECT * FROM `ts` WHERE 1;
SELECT * FROM `ts` WHERE `author`='李白';
SELECT * FROM `ts` WHERE `title` like '%花%';

SELECT`title` , `author`FROM `ts` WHERE `author`='李白';
SELECT distinct `author` from `ts`;
SELECT author, count(poem) FROM `ts` WHERE poem like '%花%' group by author;
SELECT author, count(poem) FROM `ts` WHERE poem like '%花%' group by author order by count (poem) DESC;

CREATE database test1; 
USE test1;
insert into ts values (100000,"卷号","标题","作者","正文");
update ts set len=length(poem);

SELECT LENGTH("ABC")
SELECT LENGTH("一二三");

update ts set len=length(poem)/3;
SELECT instr (poem,"，")-1 FROM `ts`;
UPDATE instr (poem,"，")-1 FROM `ts`;
update ts set `lines` =len/instr(poem, "，");

SELECT left(poem,instr(poem,"梅花"))FROM `ts` where poem like"%梅花%";
SELECT right (poem, length (poem)/3 - instr(poem,"梅花"))FROM `ts` where poem like "%梅花%";
SELECT left(poem , instr( poem,"梅花”) , right(poem, length (poem)/3 -instr(poem,"梅花”))FROM `ts` where poem like "%梅花%";
SELECT left (poem , instr( poem,"梅花")-1),"梅花"as `关键词` , right(poem, length (poem)/3 -instr(poem,"梅花")-1)FROM `ts` where poem like "%梅花%";

SELECT * FROM `pku` ORDER BY `freq` DESC;
SELECT * FROM `pku` WHERE left(word, 1)=right(word,1) and length(word)=6;
SELECT * FROM `pku` WHERE left(word, 1)=substring(word,2,1) AND right(word,1)=substring(word,3,1) and length(word)=12;

SELECT sum(freq) FROM `pku` ;
SELECT AVG(freq) FROM `pku` ;
SELECT pos , count(pos) as "词类频率" FROM `pku` group by pos order by "词类频率" desc;

SELECT reverse(word) FROM `pku`;
SELECT * FROM `pku` WHERE word=reverse(word) and length(word) !=3 and substring(word,1,1)!=substring(word,2,1);
SELECT reverse(word)FROM `pku` where reverse(word) in (select word from `pku`);
SELECT reverse(word) FROM `pku` where reverse(word) in(select word from `pku`)and length(word) >=6 and left(word,1)<>right(word,1);
SELECT DISTINCT reverse(word) FROM `pku` where reverse(word) in(select word from `pku`)and length(word)>=6 and left (word,1)<>right(word,1);
SELECT DISTINCT reverse(word) FROM `pku` where reverse(word) in(select word from `pku`)and length(word) >=6 and left (word,1)<>right(word,1)and word>reverse(word) ;








