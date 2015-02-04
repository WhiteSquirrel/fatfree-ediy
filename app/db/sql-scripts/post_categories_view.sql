CREATE OR REPLACE VIEW v_post_category
	AS SELECT t.term_id, t.name, t.slug, tt.count
	FROM wp_terms t
		JOIN wp_term_taxonomy tt
			ON t.term_id = tt.term_id
	WHERE tt.taxonomy = 'category'