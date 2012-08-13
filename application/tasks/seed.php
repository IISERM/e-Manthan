<?php
	Class Seed_Task
	{
	
		public function main()
		{

			DB::query('TRUNCATE TABLE categories');
			
			$issue = new Issue(
				array(
					'issue' => '2012'
				)
			);

			$issue->save();

			Category::create(
				array(
					'category' => 'Campus Buzz'
				)
			);

			Category::create(
				array(
					'category' => 'Travel'
				)
			);

			Category::create(
				array(
					'category' => 'Poetry'
				)
			);

			Category::create(
				array(
					'category' => 'Fiction'
				)
			);

			Category::create(
				array(
					'category' => 'Food (Yum Yum Yum :) Nom Nom )'
				)
			);

			Category::create(
				array(
					'category' => 'Non Fiction'
				)
			);

			Category::create(
				array(
					'category' => 'Art'
				)
			);


			Category::create(
				array(
					'category' => 'Dance'
				)
			);

			Category::create(
				array(
					'category' => 'Darpan'
				)
			);

			Category::create(
				array(
					'category' => 'Art Club'
				)
			);

			Category::create(
				array(
					'category' => 'ASAP (Astro)'
				)
			);

			Category::create(
				array(
					'category' => 'Phi @ I'
				)
			);

			Category::create(
				array(
					'category' => 'Curie Club'
				)
			);

			Category::create(
				array(
					'category' => 'BDF'
				)
			);

			Category::create(
				array(
					'category' => 'Mathematicians'
				)
			);

			Category::create(
				array(
					'category' => 'IMQC (Quiz)'
				)
			);

			Category::create(
				array(
					'category' => 'Deb Soc'
				)
			);

			Category::create(
				array(
					'category' => 'Official Deb Soc'
				)
			);

			Category::create(
				array(
					'category' => 'Photography'
				)
			);

			Category::create(
				array(
					'category' => 'L.C.A'
				)
			);

			Category::create(
				array(
					'category' => 'Bins and Me'
				)
			);

			Category::create(
				array(
					'category' => 'IG Nobel'
				)
			);

		}
	}