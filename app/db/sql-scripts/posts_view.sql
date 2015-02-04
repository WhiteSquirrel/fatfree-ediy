CREATE OR REPLACE VIEW v_posts
AS SELECT p.*, t.name AS post_category_name, t.slug AS post_category_slug
FROM wp_posts p
	JOIN wp_term_relationships tr
		ON p.ID = tr.object_id
	JOIN wp_term_taxonomy tt
		ON tr.term_taxonomy_id = tt.term_taxonomy_id
	JOIN wp_terms t
		ON tt.term_id = t.term_id
WHERE p.post_type = 'post' and p.post_status = 'publish' and tt.taxonomy = 'category'