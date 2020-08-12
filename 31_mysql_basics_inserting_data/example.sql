-- TODO: switch to DBeaver instead of this web console interface

INSERT INTO posts (subject, content, date) 
VALUES (
    'My first post',
    'The quick brown fox jumps over the lazy dog.',
    NOW()
);

-- SELECT * FROM posts
-- "id","subject","content","date"
-- "1","This is the subject","The quick brown fox jumps over the lazy dog","2020-08-12 11:51:39" 
-- ^ here's one I did earlier...
-- "2","My first post","The quick brown fox jumps over the lazy dog.","2020-08-12 11:54:51"