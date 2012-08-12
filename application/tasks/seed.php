<?php
	Class Seed_Task
	{
	
		public function main()
		{
			DB::query('TRUNCATE TABLE categories');
			
			$category = new Category(
				array(
					'category' => 'Best'
				)
			);

			DB::query('TRUNCATE TABLE authors');
			
			$author = new Author(
				array(
					'name' => 'Gagan Preet Singh',
					'affiliation' => 'The God of the place',
					'description' => 'I am the God dude',
					'img' => 'thumbs/3'
				)
			);

			DB::query('TRUNCATE TABLE articles');
			
			$article = new Article(
				array(
					'title' => 'My Article',
					'content' => 'The God gives his message',
					'notes' => 'Note this down dude!!',
					'thumbnail' => 'thumbs/5',
					'deleted' => false,
					'published' => true
				)
			);

			DB::query('TRUNCATE TABLE categories');
			
			$issue = new Issue(
				array(
					'issue' => '2012'
				)
			);

			$article->save();
			$author->save();
			$category->save();
			$issue->save();
			$article->author()->attach($author->id);
			$article->category()->attach($category->id);
			$article->issue()->attach($issue->id);

		}
	}