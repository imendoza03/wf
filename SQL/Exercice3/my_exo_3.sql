SELECT * FROM test.orders WHERE agent_code='A002';
UPDATE test.orders SET description = 'NC' WHERE agent_code='A002';

SELECT * FROM test.orders WHERE customer_code = 'C00022';
DELETE FROM test.orders WHERE customer_code = 'C00022' AND description = 'NC';
