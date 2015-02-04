CREATE OR REPLACE VIEW wp_menu
	AS SELECT wt.name, wt.slug, wt.term_group, wt.term_id, wtt.count, wtt.description, wtt.parent, wtt.taxonomy, wtt.term_taxonomy_id
	FROM wp_terms wt JOIN wp_term_taxonomy wtt ON wt.term_id = wtt.term_id 
	WHERE wtt.taxonomy = 'category'