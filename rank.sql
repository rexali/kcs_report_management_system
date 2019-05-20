SELECT id, firstname, math_total, FIND_IN_SET( math_total, (
SELECT GROUP_CONCAT( math_total
ORDER BY math_total DESC ) 
FROM report )
) AS rank
FROM report WHERE id =2




SELECT id, firstname, math_total, FIND_IN_SET(math_total,( SELECT GROUP_CONCAT( math_total ORDER BY math_total DESC) FROM report)) AS rank FROM report WHERE id =2