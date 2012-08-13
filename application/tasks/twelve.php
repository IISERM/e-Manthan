<?php
	Class Twelve_Task
	{
		// 
		public function main()
		{

				// Srijit: Apples
			Article::create(
				array(
					'title' => "The Three Apples That Changed The World",
					'content' => "<h4><strong><u>The Apple That Eve Ate</u></strong></h4><br/><h5><strong>....from the Book of Genesis: Chapter 2</strong></h5><br/>The story of Adam and Eve tells of the creation of man and woman and their ultimae fall from glory.<br/>God made the first man from clay and named him Adam. He also created a beautiful garden, which was called Eden . That night, God took a rib from Adam's side and made the first woman, who was called Eve.<br/>God told Adam and Eve that they could help themselves to anything they liked in Eden and wander anywhere, but forbade them to eat the fruit of the tree in the middle of the garden. This tree was the Tree of Knbowledeg and this knowledege referred to the ability to differentiate between the good and the evil.<br/>One day Eve met a snake that lied to her and told her the fruit on the Tree of Knowledge would do no harm. The snake ultimately succeeded in corrupting her and she ate the fruit. She took the fruit ot Adam and they shared it. Soon, they became fearful of God.<br/>Go found that evening, adn was sad that they disobeyed Him. He banished them from the Garden of Eden. From then on,they had to make their own living from the soil and nothing came easily to them. They had children, Cain and Able, and soon died.<br/><br/><center><h4><strong><u>The Apple</u></strong></h4><br/>Was gravity always<br/>a matter<br/>of space and time?<br/><br/>It used to be force<br/>before turning itself<br/>into a geometry.<br/><br/>And what was gravity before<br/>a falling apple<br/>turned into a force<br/><br/>And what was an apple<br/>before it became a means<br/>for attraction,<br/>between bodies?<br/><br/>Or even before it was a fruit?<br/><br/>Apples still fall;<br/>and as they land<br/>on the taste bud<br/><br/>they keep moving<br/>into inner space<br/><br/>to get lost<br/>in the recesses of time<br/><br/></center><br/><h4><strong><u>The Steve Jobs Story</u></strong></h4><br/>Not everyone is an Apple fan nor does everyone use an i-item, but the passing of Steve Jobs indeed has left many a heart heavy.There will hardly be a soul who hadn't heard of this genius who redefined the way that non-nerds, like me, percieved technology. He embodied innovations and entreprenual spirit like no one else.A drop out of Reed College, Jobs was brave enough to think differently and break the rules, bold enough to beleive he could change the world and talented enough to do it.<br/>Steve travelled to India in search of spiritual enlightment in the early 1970's and hoped on his return to the US that he would be able to save enough money and return to the Kanchi Ashram but luckily for the computing world, it never materialised. Apple was founded by Jobs, Wozniack, Markkula, and Wayne in 1976 and in 1984 Jobs introduced the first successful small computer with Graphic User Interface, Macintosh to the world. He credited his calligraphy course in college ( which he continued to attend )for the multiple typefaces which were first introduced by Mac. Despite all this he was fired from the company he started by then CEO, John Sculley. However , Steve claimed later that it was the best thing that could happen to him as he got an opportunity to start afresh. He soon started the technologically advanced but the cost prohibtive, NeXT Computer that mainly catered the scientists. Though the Jobs' legacy at The  Graphics Group (renamed Pixar) is often  overlooked , in a sense, it may last the longest because he contributed  a culture of thinking differently. Pixar-Disney collaboration produced box-office hits - The Toy Story, Findng Nemo, Ratatouille, WALL-E and the list is endless. It was in 1996 when NeXT was bought by Apple that Jobs came back to the company he founded and became the 'iCEO'.<br/>In mid-2004, Jobs was diagnosed with a rare though less agressive type of pancreatic cancer that forced him to resign and rejoin Apple many times before announcing retirement on 24th August earlier this year. With his death on 5th October, 2011 the world lost an amazing human, a visionary and a creative genius all in one. One of the most powerful and influential people of our generation, he is one person whom we won't forget for many years to come.<br/>",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(1);
			$article->author()->attach(4);
			$article->issue()->attach(1);
			$article->author()->attach(3);

				// Yosman: Choclates
			Article::create(
				array(
					'title' => "Chocolates",
					'content' => "I eat, drink, breathe chocolates and am sure many are like me... absolutely crazy about it. For me it is 'chocolates everyday keep doctors away'. As a matter of fact, I have come to realize in the last couple of months that it also acts as the best incentive! <br/>Chocolates as we know it today was introduced to us by John Cadbury only two centuries back, even though the Mokaya people loved their cacao beverages in 1900 BC. The Aztecs developed a range of chocolate cuisine that's been handed down the generations and we see the Mexican doing it even today.<br/>The Mayans preferred the spicy chocolate drinks where they mixed chilli pepper and cornmal with the ground cacao seeds. Both these ancient civilizations considered drinking chocolate as a sacred brew and it was used only for religious and royal events.<br/>It was with the Spanish conquest of the Aztec that Eurpe got introduced to this wonder beverage. However, all this was bitter chocolate. It was the Industrial Revolution that brought into our lives the sweet candy. The Dutch process of treating chocolate with alkali was done for the first time by van Houten and this helped remove the bitter taste!<br/>Lindt, Nestle, Cadbury and Hershey are the biggest competitors in the international market today, but it was a joint effort of them all to make chocolate popular amongst people. The effect of chocolate in our lives is so much that it features in a large number of ways too. The mst famous, of course, being Roald Dahl's children's novel 'Charlie and the Chocolate Factory'. Laura Esquivel's 'Like Water for Chocolate', Joanne Harris' 'Chocolat' , Joanne Carl's 'Chocoholic Mysteries' and Toby Moore's 'Death By Chocolate' have chocolate in a role, central to the plot.<br/>For chocoholics like me it's good to know the potential positive health effects. Though over consumption is associated with obesity, dark chocolate helps reduce blood pressure, lowers cholestrol levels and reduces the risk of cardiovascular diseases. Besides, it has anti-cancer, anti-diarrhoeal, cough preventive and brain stimulating activities. So now go and binge on your chocolate guilt free!",
					'notes' => "<h4>DID YOU KNOWS</h4><br/><ul><li>Although cacoa is originally from the Americas, today it is the countries of Western Africa that produce almost two-thirds of world's cacoa, with Cote d'Ivoire growing almost half of it. </li><br/><li>Every year seven to nine times more cocoa is bought and sold on exchange than exists.</li><br/><li>The Aztec used cacao as a form of money to trade with the Mayans. </li></ul>",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(2);
			$article->author()->attach(4);
			$article->issue()->attach(1);

				// Yosman: Woman
			Article::create(
				array(
					'title' => "The Woman",
					'content' => "Born is she amidst vibrant hues<br/>Ushering happiness into the lives of all<br/>With her magical touch flowers bloom, cuckoos coo<br/>She shapes her own dreams of standing tall.<br/><br/>As days pass she transforms into the ultimate beauty<br/>She sends the mercury soaring high<br/>Leaving many thirsty for just one glimpse<br/>When she walks in her red evening gown, bidding her public life good bye.<br/><br/>As a home-maker she is clad in pastel and brown<br/>She grieves not of her beauty that's gone<br/>Carefully she nurtures her baby<br/>For she knows her daughter will be sunshine next morn.<br/><br/>She walks about feebly in white<br/>Her hands perpetually cold, too numb to her cane<br/>She looks back and ponders- she's sure to have lived her life<br/>She closes her eyes to be reborn again.",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(3);
			$article->author()->attach(4);
			$article->issue()->attach(1);

				// Srijit: Death of Life
			Article::create(
				array(
					'title' => "Death Of Life",
					'content' => "I heard murmurs<br/>I heard some noise<br/>But somehow I could not<br/>Hear my own voice<br/><br/>My mind was full<br/>With thoughts of all kind<br/>But I found no poems<br/>To pen down and write<br/><br/>I saw no chains<br/> That bound my feet<br/>But I could not run<br/>For chasing the clouds<br/><br/>There was no dust<br/>And there was enough light<br/>But I could not find myself<br/>The mirror just lied<br/><br/>I kept breathing<br/>My heart keptg beating<br/>And I continued to love<br/>But life had died<br/><br/>I heard murmurs<br/>I heard some noise<br/>But somehow I could not<br/>Hear my own voice<br/>",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(4);
			$article->author()->attach(9);
			$article->issue()->attach(1);

				// Sharmi: Memoirs of a Brow Beaten Door
			Article::create(
				array(
					'title'=>"Memoirs of a Brow Beaten Door",
					'content'=>"From the very first day that I was fixed in between the forbidden corridors on the seventh floor of hostel 5 (to the relief of a few and annoyance of very many) I knew my life would not be easy. The inhabitants, on either side of where I stood, seemed mighty strange. They were not the kind of people I was used to. A few would shriek and shout in some  strange language, some would stay fearfully quiet, some would hurl a string of abuses at each other for no rhyme or reason, some would sing terribly in the middle of the night - in short, they were quite an unruly lot!<br/>I always had this uncanny feeling that they had chosen the wrong door to do the wrong job. I waited and waited for something to happen. And finally one day something did. I was snoozing off in the middle of a lazy winter afternoon when I was so rudely interrupted - \"BANG\"!! Once, twice, thrice first from the top with clenched fists and then came the more severe blows from the bottom! Alas! It was then that I realized what a pain being a door could be. People come up and kick you for no reason and you'll have to put up with it! Why?? Because you're just a big chunk of wood! No one would ever consider the fact that one might actually get hurt, or one might NOT want to be brutally punched and kicked every time  someone's maths paper turns out to be a disaster or when someone realizes that he really sucks at playing the guitar or when someone has a lousy break up.. My only saving grace was that the attack seemed to be one sided. And I thanked the lord for whoever lived on the \"other side\", because they seemed to be above and beyond all this immature banging of doors.<br/>To my utter dismay the first attack from the \"Other side\" was launched right in front of my face on the eve of that fated day-(being a big chunk of wood you would not expect me to actually remember the date!) And again to my immense shock the first blow proved to be fatal! For the people living on the other side seemed to know my exact soft spot (that would entail the defects which I acquired while being manufactured) and very strategically someone placed one good kick with the required impulse (yes, I know what impulse is!! Being a door in IISER one might expect me to know that) and I became undone! My bottom, em.. that would be my lower panel came magnificently out of its steel frame and  on to  the floor. Right after the event - with the parties concerned having successfully evaded - the people living on the opposite side came to assess the damage done. Some of them were pretty disappointed with the fact that the first fatal blow came from the \"other side\". Pretty soon the news travelled across the other corridors as well and the seventh floor partition breaking became a phenomenon that would become not so rare in the coming months. The people from the \"other side\" in the mean time went underground.<br/>Now people had taken it up as a sport - to bang the door and kick it as many times as possible during the day irrespective of whether there were any of the few reasons cited above which would cause them to behave like a bunch of barbarians. Earlier I was used as a surface to vent out frustrations but now I was used to express moments of ecstasy and joy as well. Birthday parties, table tennis matches, India's victory in the world cup, end of semester celebrations - you name the occasion. You might think that I would be somewhat happy to be upgraded to be beaten on a more cheerful note but if you were a big chunk of wood you would have understood my pain.<br/>Day in and day out the other doors in my neighborhood would watch me in my plight. They said that I was being brave; that I would be celebrated as the hero of all doors ever to stand in a Hostel 5 corridor. I would just smile and brood in my misery - knowing that my end was drawing very near and wishing for the same. Finally it did happen - this time my top panel was flung open from its frame and thrown over to the \"other side\". I could even plot you the trajectory of the fall!<br/>So I lay there watching the greater half of me lying lifelessly on the ground some 2-3 feet away. And to add insult to injury they poured water on me, buckets and buckets of it. I watched myself being ill treated thus. That was a rough night for me. It would have been more appropriate if the water had been poured from the top so that I could liken it to tears of sorrow but to my great displeasure those blasted kids poured water from the bottom (I'm sure I wouldn't have to explain what that could be likened to!). After all that, I braced myself to face the worst - maybe next time they would set me on fire! That would be a quick and easy way to go. Miraculously that hasn't happened yet. All of a sudden the corridors became quiet again, no more kicking and watering the door. I was finally left in peace. With my self esteem shattered and my spirit broken I was reduced to nothing more than a big chunk of wood, something that I might have been originally designed to be. But I know that being an inopportune door I will not be let go of so easily. Thus, I patiently await my final outcome in the hallway of that ill-fated seventh floor.<br/>",
					'notes'=>"",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(5);
			$article->author()->attach(6);
			$article->issue()->attach(1);

				// Sharmi: Purism and Public
			Article::create(
				array(
					'title' => "Purism and the public",
					'content' => "A primary attribute that one must possess if one desires to be good company at the chat window online, these days, is the ability to type like a complete retard. Of course, the choice of the word might be make some sensitive soul gasp and the people for human rights might even scorn at it, declaring it as a public outrage, but I think they are only too eager to draw conclusions and categorize everything. Sometimes one should just analyze things from the outside, and take them for what they look like.<br/>Just analyze the word in question for a moment, it goes \"reee-taahhrrrdd\", the sound has a funny tinge to it, if you know what I mean. To be more visual on that point, think of a person with a long face, wide open eyes, and a gaping mouth; who talks very slowly as though to savour every word that escapes his mouth. Or if you haven't been able understand this, just think of Goofy and save me the trouble of making one more feeble attempt at a nonsensical description. Now with this in mind take a look at the following conversation:<br/><br/>\"Hiiiiiii!!!!!!!!!!\"<br/>\"Heyyyyyyyy, how r uuuuuuu???????\"<br/>\"i m guddddd!!!!!! uuuuuuu????????\"<br/>\"i m gr8888888!!!!!!!!!!!!\"<br/><br/>Notice how each statement is prolonged, how each word is expressed slowly and steadily as though in an attempt to, umm.. savour it.<br/>A single question mark indicates that the statement is interrogative; two-three of those mean that the person is really curious; but filling up line after line with \"?\" simply indicates that intervention from the Asylum is of the essence.<br/>Such chats, however, appear to be the norm online these days. And thus, no matter how hard one tries, one is always faced with the rather tricky question of whether or not to be retarded; to follow the norm and be normal. Although most of the public does not face much difficulty in making a choice, those that are most severely affected by this dichotomy are the purists - whether to write such language and use such syntax, to seek acceptance of the public, seek normalcy - or not?<br/>It was a similar sort of question about whether to or not to die that often lead Hamlet to his famous soliloquys - and a reservation in the looney bin owing to those. For although by one mere glance at the question, a by-stander would comment, \"What-ho! It's simple\", and go on to wonder what a mutt-head that Hamlet - or whoever that was - might have been, since he couldn't make an obvious choice. But if that accomplished by-stander puts even a single of his grey cells to work on the point, his answer would seemingly encompass both the options, with the balance tilting towards neither side, and the gravity of Hamlet's dilemma would dawn on to him.<br/>A similar status prevails of the purist: the choice between sanity and sanatorium (of the mental kind) is not an easy one for him, and following a similar procedure on the lines outlined above even the dumbest by-stander can see the gravity of his dilemma, too. ",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(6);
			$article->author()->attach(8);
			$article->issue()->attach(1);

				// Sharmi: Ryming my way to Disgrace
			Article::create(
				array(
					'title'=>"Rhyming My Way to Disgrace",
					'content'=>"<center>I speak of joy, of love, of care,<br/>I speak of how I want to be,<br/>In summer, with that girl so fair,<br/>Than, in winter be so lonely.<br/><br/><br/>I jabber of sorrow, and broken-hearts,<br/>All that stuff about being sad apart.<br/>And, I wish death for the damage done,<br/>But forget it all with the rising sun.<br/><br/><br/>I rant of hate, of rage, of lies,<br/>I rant of how the world has wronged,<br/>In passing thought, in every cry,<br/>In every tune, in every song.<br/><br/><br/>I talk of booze, of smoke and pot<br/>I talk of drugs and all that rot.<br/>And still, to talk some more I try,<br/>But I can't, you know, because I'm high!<br/><br/><br/>I pen all this, but it don't make sense,<br/>It lacks meaning, and lots of tense.<br/>There isn't poignance, neither Beauty's trace,<br/>But at least, I'm rhyming my way to disgrace.</center>",
					'notes'=>"",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(7);
			$article->author()->attach(8);
			$article->issue()->attach(1);

				// Sharmi: Smell of Wet Sands
			Article::create(
				array(
					'title'=>"Smell of Wet Sands",
					'content'=>"A classic expression that is visible on every Indian's face during the hot and tiring summer months could be easily translated to-<br/>\"Ufff!! When will the blasted monsoons set in?\"<br/>It's practically impossible to put an end to this complaint- right from April till mid July- when the monsoons finally set in.<br/>Even a delay of a few days is pretty frustrating. I, myself have experienced two extreme summers. Well they have been  agonising and very painful. One was a  hot, dry and a dusty summer in Rajasthan,and the other was in  Kolkata.<br/>The only place you can seek refuge in Kolkata  would be an air conditioned room-no fan can soothe you. Though both the summers were  equally uncomfortable and there's no comparison whatsoever.We find the same blank expression on every person who is familiar with  onset of rains.... Well speaking of summers, it's not a bad season by any means...Lovely fruits (especially Mangoes and Watermelons) , a beautiful late sunset and how can I forget ice cream, juice and all other cold snacks and desserts for which we crave year round. Yet there's a smile worth seeing on every one's face when we hear of the monsoon breaking in.Well that's a very warm welcome to the monsoon from every Indian ...<br/>When we have the first spray of showers in this beautiful land of ours...It's a feeling that no person can describe. The view is so vivid that it cannot be admired at once. The horizons become closer and nearer owing to the mighty rains and mists. The greenery spreads  as if touched by the elixir of life. The creaking and croaking of the insects and frogs resumes, and it's something neither Beethoven nor Mozart could compose- an unsynchronized symphony...The life on this planet takes a massive swerve. Birds chirp in joy singing songs which we cannot comprehend, yet listen to in awe. For farmers, it's more than their life to see tiny green leaflets burst open from the brown soil. Oh, the sound of the raindrops!<br/>Almost everyone, except the urban population perhaps, is greatly  touched by the monsoons. But do we, the so called \"city dwellers\" even care about it? For us it's just a season to that would be reported in the news. We are least bothered to even appreciate this phenomenon... We are also the greatest fraction of the population to curse this magical phenomenon. Our expressions go somewhat like this \"Oh god!! So sticky! So Dirty! So muddy! Such a mess! God this muck is killing me.\" Actually this is not our fault. We actually haven't been trained to look beyond the mud pools and potholes during rains. All we see is mud, muck . We are born and brought up amidst concrete walls. Hardly do we get a chance to get drenched. Even when we do, it's just abuses and curses for the monsoons.<br/>How many of us have indeed taken a walk with our dear ones in the slight drizzle with the breeze brushing by our cheeks and giving us the hug that no person can give? It's like an invisible spirit just tickling us making us smile in happiness. Do we ever let the raindrops sprinkle our faces with the holy waters of the sky and awaken us from the mad unrealistic world of materialism and make us wander off into the lap of heaven? Do we ever allow ourselves to stand  on the terrace, with our eyes closed and enjoy the reconstructed view of the world as we dream it to be?If you ask yourself most of these questions the only answer you'll come up with is \"No\".This lovely season is to be cherished and not to be wasted. It's high time that we start realising what this season has to offer. Our subcontinent is  a unique one. No other place on earth experiences such a wonderful phenomenon which soothes the mind and soul to such an extent. Rainfall is natural, but this rainfall is special. The misery of the scorching  summers are put to an end by the monsoons. With various environmental hazards setting in and the rapid changes in the global climatic conditions the monsoons might be a luxury that we might have to forego in the near future.So I think it's high time we  realize  that the \"Sweet Smell Of the Wet Sand\" is after all not everlasting..... A message from Srijit ....",
					'notes'=>"",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(8);
			$article->author()->attach(16);
			$article->issue()->attach(1);

				// Sharmi: The Jealous Males
			Article::create(
				array(
					'title'=>"The Jealous Males",
					'content'=>"History has been witness to as many stories of jealousy, as that of love. They are actually two sides of the same coin. I knew this from both my personal experiences as well as from the little knowledge of human history I had. When I started studying natural science, I never knew that I was up for more about the same theme. But very soon I realised, even natural history is studded with numerous stories of jealousy. One curious thing about them is, jealous males, for some reason, are more talked about than jealous females. I learned about creatures which guard their wives like treasures, some even use chastity belts (biologists like to call them - \"mating plugs\"). Fight among rival males for access to the priced maid is so common that great Charles Darwin had to write one full book talking about them. However, after Darwin, it was a slow progression of events that saw the relationship between males and females scrutinized and re-scrutinized. And still the debate is not over. As a young undergrad student I was always fascinated by this debate and the inspiration led me to take up this study as full time occupation for few years during my doctoral research.  I started watching little flies in their artificial homes. I wondered what kind of information I might gain by watching them, as they seemed to me useless little flies always preoccupied with feeding. However, one curious thing caught my eyes. The males of these tiny insects seemed to be never out of their sexual lust and not much into feeding business. So much so that I felt pity for the females, how do they tolerate this coercion? On the other hand, how do the males cope with their almost continuous activity of courting the females? More surprising it appeared to me, as my teacher once told me that mating seems to be costly to females  (which is understandable) but not so for males and that is why they can go around mixing and mating with several females at will! The paradox to me was, if males spend so much of their energy just dancing, singing and chasing other males and still end up spending almost no time eating, then how can the whole activity be costless?<br/> The beauty of the flies I was looking at was it not only let me ask questions but also gave me a way to perform scientific experiment to solve them. Keeping all these questions in mind I set off for my first scientific study. I started studying the males. Soon I figured out (from others' work) that males not only dance and sing but also pass on some \"tokens of love\" to their maids while making love. And as it turned out these tokens are symbols of jealousy and equivalent to the chastity belts in other organisms. I wondered whether love making becomes longer if males are more jealous, just to ensure that his maid is sufficiently flooded with his gametes and the tokens. To test my suspicion I started observing their love making processes under different conditions. After spending a long time observing them and with the help of a gang of very keen, young observers, I realised that something similar to my suspicion happens with these flies. At the end of my observation I figured out that males indeed become jealous by seeing other males around. Under their natural condition they see around 15 more rivals around and they mate for 19 minutes on an average (quite an achievement that would make even the most proud human feel ashamed of their own performance). And given that the actual process of impregnation takes only few minutes, jealousy seems to be reason of this long love making process. Now, for a lonely male, where there is no real cause of immediate jealousy, this duration came down by about 36 percent - a confirmation of the jealousy hypothesis. However, there was an even bigger surprise! When there are more number of rivals than usual (about twice), males seemed to become over jealous and loose all hope and thereby reduce the duration of their priced behaviour by 10.5 percent. Well, Darwin would have asked, so what - do all these manipulation by males affect their efficiency of fathering young ones (Darwinian fitness)? After all, that is what matters to evolution and to recall Sir Peter Brian Medawar's saying: \"For a biologist, the alternative to thinking in evolutionary terms is not to think at all\". As it turned out this behavioural manipulation had a strong correlation to their Darwinian fitness. Males that spent too little time (out of either over confidence or over jealousy) wooing his maid ended up siring less number of offspring compared to males that spent quality time doing the same. In other words, (for fruit flies) time spent doing the most talked about thing turned out to be a very good predictor of a male's success in sexual rivalry - something that might bother most of my male colleagues.  So not only humans but also the males of even these tiny fruit flies care about the intensity of sexual rivalry and assess it by some social cues associated with the number of rivals. Their assessment leads to some modification of their investment per maid, a behaviour which is closely connected to their efficiency of fathering young ones.<br/>It not only let me and my male colleagues learn an important lesson of \"life\", but also gave us a strong reason to believe our starting hypothesis. No longer, we could look at males as mere gamete producing machines, copulating with whatever they can get their hands on.<br/>As is the case most often in science, getting an answer to a question only paves the way for more questions about the same phenomena: our new understanding of the male reproductive behaviour only made us ask several other exciting questions which have been ignored so far. Do males choose between available females in some obscure way? If jealousy and love are inseparable, then if perception of jealousy is altered - say, when engaging in adultery (either be the cuckolded male or the cuckolder), when there are lot of handsome rivals around, do males respond to the altered change? More interestingly, if some population experience more or less jealousy, do they evolve to cope with that? If they do what evolutionary novelties enable them to do that and how far they are connected to other physiologies of the organisms? Our small study showed that even such a simple aspect of an organism's behaviour as how long to mate is under strong selection pressure. Thus one can only imagine the complicated mechanism of evolution of reproductive behaviour and physiology of organisms. I wonder whether we are even half way through with the most superficial understanding of the most fundamental aspect of our life.",
					'notes'=>"",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(9);
			$article->author()->attach(5);
			$article->issue()->attach(1);

				// Sharmi: The Making of an Institution
			Article::create(
				array(
					'title' => "The Making of an Institution",
					'content' => "I joined IISER Mohali with my own share of apprehensions, partly because I was going to be a student again after a gap of more than 10 years and partly because I didn't know much about IISER's. Last few months have been exploratory for me on both the fronts and I am going to use this magazine as a platform to express some of my explorations. After all, a student magazine is all about expression of thoughts.<br/>My constructed image of the new institute was a place where there are academic buildings, classrooms, hostels, the concrete walls, the landscaped lawns, the digital infrastructure, the formalized faculty areas and groups of students. And when I first came here, at the very outset, the place looked like a grassland, with a couple of buildings here and there. But as I began to get familiarized, I saw an immense number of sincere and intellectual minds at work in this humble looking place. Among these are the students, scientists, researchers, builders, workers; all coming together in the organic process of making of an institution. And I have realized how much more than bricks and concrete, it's the people who build a place. I have realized how the vibes that people in a community generate, overshadow the presence or absence of certain, taken for granted notions of a geographical space with a set of resources.<br/> This realization has evoked a series of questions in my mind. Well of course it's the people who built societies, nations, airplanes, computers, bombs, governments; isn't it? Then why do we start taking 'things' for granted in our everyday lives? Why do we expect things to be in put place for us by others? Aren't we the creators of our own spaces and our own paths? Should we question the abundance or dearth of resources; or should we rather question our own sense of entitlement?<br/> So coming back to the fact that this institute is still in the process of making, I see this as a challenge as well as an opportunity. The challenge to pave our own path, set examples and be original. The opportunities to belong, interrogate, contribute, evolve or even watch it evolve. It is like the bonding that happens between a new parent and a newborn, when the parent holds the fragile infant in his arms and undergoes a transformation being responsible for the nurturance of another life, in such a fundamental form.<br/>About being a student again after a long gap, I am actually intrigued by the level of awareness and enthusiasm of student community about their own respective areas and also their interest and awareness towards the general issues of society at large. And my initial meetings with some of the YATN volunteers and subsequent knowledge about the activities going on in so many other student clubs, confirm that view. The inclusive approach, that many of the members of IISER community are adopting, weighs much more in front of the challenges that a new institution poses.<br/>Lastly for me, from the viewpoint of a research student in Social Sciences, the absence of a large peer group bothers me sometimes, but at other times it is compensated by the observation of this small society at work within the campus, with overlapping boundaries with the society at large outside the campus and it gives me food for thought. I hope the process of observing, questioning, interacting, thinking and writing continues and I hope to get to know the thoughts of many of us who have been engaged in similar processes.",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(10);
			$article->author()->attach(9);
			$article->issue()->attach(1);

				// Sharmi: The Politics  Of Forgetting
			Article::create(
				array(
					'title'=>"The Politics of forgetting",
					'content'=>"I have borrowed part of the title from an article published in Outlook on 17th October 2011. This article is inspired by it. That article raised a question, why do we remember sufferings of some people while neglecting others'? The 26/11 attacks on Mumbai shook the nation and we'll always remember the cruel day. The way our army tackled was commendable. However, we don't sympathize in the same way with the Kashmiris and people in east India where more than 1 lakh innocents have been killed, many at the hands of our jawans. Similarly, the 9/11 attacks on US became world news and recently the tenth anniversary was commemorated on ground zero. However, people do not know the accounts of obscene numbers the Americans have killed in Afghanistan in the name of \"War on Terror\". It was on 9/11/1973 that the democratic government of Salvador Allende in Chile was overthrown in a CIA assisted military operation. Irony is that most of us haven't even heard about it.<br/>Have we ever thought why it is that a few incidents get all the attention while many cases are forgotten? I fail to believe that it is naïve human nature. There's much more to it. Many issues are crafted and moulded for public. What is played is politics of forgetting by moulding public opinion through biased reportage and obliterating memories of thousands others suffering.<br/>And why go halfway across the Earth to point out such incidences? These are common in India also, where, for instance, many tribals are displaced from their lands in the name of progress. It has been a cherished dream, if not priority, to make India a developed nation by 2020. However, we should stop for a while to analyze what the cost of this success is. Are we progressing on someone's cost and violating someone's fundamental rights?<br/> Now let's take the case of IISER Mohali. We are currently a community of nearly 450 students, 100 faculty counting their families and nearly 500 construction workers counting families. There have been 8 labour deaths in the last 4 years. What would have been our reactions if these were deaths of 8 students or 8 faculty members?<br/> Since these are poor labourers, whose lives are treated as disposable, the families of the deceased are given some compensation and sent back to their villages. The files are just shoved in cupboards, with paper work complete. Such incidences are not investigated thoroughly, for if they were, such accidents would not have been repeated. The sad part is that the contractors cunningly play the politics of forgetting and we comfortably get along.<br/>We on the other hand live in our immediate premises, in a comfort zone the workers have constructed for us. We choose to ignore the issues concerning people who comprise nearly half of our community. Claiming to be the scions of development of modern India, we passively promote such gross violations of human rights.<br/>We failed to take collective responsibility of the incidents of deaths in campus. It is tragic that 8 people died in campus. It is even more tragic that our education and economic development has given us a sense of entitlement that certain rights are for ourselves only, without a responsibility towards those who are less privileged to possess or inherit means to attain this education and economic development.<br/>Maybe we need to introspect and ponder over our notions of life and death and our image of an educated,developed and a responsible community.These are the starting years of IISER and we should analyze on whose cost the foundations of this \"going-to-be-great\" institution stands.",
					'notes'=>"The 1973 Chilean coup d'état was a watershed event of the Cold War and the history of Chile. Following an extended period of political unrest between the conservative-dominated Congress of Chile and the socialist-leaning President Salvador Allende, discontent culminated in the latter's downfall in a coup d'état organized by the Chilean military and unofficially endorsed by the Nixon administration and the CIA, which had covertly worked to spread discontent and opposition against the government.<br/> A military junta led by Allende's Commander-in-Chief Augusto Pinochet eventually took control of the government, composed of the heads of the Air Force, Navy, Carabineros (police force) and the Army. Pinochet later assumed power and ended Allende's democratically elected Popular Unity government, instigating a campaign of terror on its supporters which included the murder of former Foreign Minister Orlando Letelier. Before Pinochet's rule, Chile had for decades been hailed as a beacon of democracy and political stability in a South America hoarding military juntas and Caudillismo.",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(11);
			$article->author()->attach(7);
			$article->issue()->attach(1);

				// Sharmi: These Years
			Article::create(
				array(
					'title'=>"These Years",
					'content'=>"<center>Never have I lived before<br/>in a city without mountains.<br/>A city with no backdrop,<br/>to lean against.<br/>A city with all and the celestial rising<br/>at the horizon.<br/>A city with rivers having no ebb<br/>wading through on low tides<br/>guided by<br/>The distant shiny stars on no moon nights.<br/><br/><br/>Its a difficult life.<br/>A city with layers<br/>added; with no thought; till no end.<br/>A city with ever searching eyes<br/>for a break or a boundary; not in sight.<br/>A city with no vantage <br/>any higher than the dwelling<br/>to gaze, to know your place.<br/>Lost; in self-similarity and self-organised criticality<br/>Never ending reflections in parallel mirrors <br/><br/><br/>How  do I rise?<br/>How do I soar?<br/><br/>Never do I want to live again<br/>in a city without mountains.",
					'notes'=>"",
					'thumbnail'=>"thumbs/5",
					'deleted'=>false,
					'published'=>true
				)
			);

			$article = Article::find(12);
			$article->author()->attach(1);
			$article->issue()->attach(1);

				// Neeraj: A Night in the Life of
			Article::create(
				array( 
					'title' => "A Night in the Life of",
					'content' =>"Disclaimer : This story is completely fictional and any resemblance to characters, living or dead is purely coincidental. Also, accepting things at face value is underrated.<br/> 9.16 pm <br/>Rohit woke to the sound of someone ramming their fists against his door. He stood up groggily, cursed and looked outside his balcony. The sun had set, so he concluded it was probably night. Being a student in a national college geared towards research in science was gruelling. So was the persistent sound of the fists. Blast.<br/> He threw open the door and his friend, Anshul was standing outside. Anshul was tall, very thin, fair and had perpetual dark circles under his eyes. He lived on the fourth floor, but he was always seen around the third floor, which was where Rohit's single room was. In contrast to Anshul, Rohit was shorter, stockier and had green eyes. He had an inexplicable fondness for hip-hop jargon.<br/> \"Mouse hai?\", Anshul snapped, \"Jaldi de, saale.\"<br/> \"Mujhe bhi khelna hai.\", Rohit said. He shot a quick glance at the alien-green laptop lying on his bed and suddenly realised how hungry he was. The food he got was not, he felt, worth eating. He was used to completely melted dal and legumes floating in water did not appeal to him. Walking to the canteen, he looked downstairs. He saw three men standing near scooters, one from Dominoes, and the other two from Pizza Hut.<br/>He went listlessly into the canteen and ordered a pav bhaji. Anshul came up to him with a mug of coffee in his hand.<br/>They listened for a while to a pretty, fair girl argue heatedly about how biology contributed a lot to gender identity, watched a small, short, brightly dressed girl sit next to her broad, tall boyfriend.<br/>They wondered for a brief moment whether all Punjabi couples came out as surprises then went to Shivesh's room to play the electric guitar. If that idiot Varsha hadn't taken away his amplifier that was.<br/>**<br/>10.45 pm<br/>Anandi stood at her balcony watching the scenes going on in the canteen. It was a very lively place, she mused, and though all her interest in social activities had dropped to a non-existent level since the second year, she was still curious.<br/>She dubiously watched a group of boys laugh raucously, and smirked to herself, imagining their reaction if a girl joined them then. She never understood why most of the guys in her college were either disdainful of girls or intimidated by them. The end result was the same. No conversation either way.<br/>She winced as loud music suddenly started pounding from somewhere opposite her balcony. She caught a glimpse of a guy with an eyebrow piercing. \"Eminem fans, sheesh.\", she thought. And went downstairs to collect her Dominoes pizza.<br/>**<br/>11.05 pm <br/>Samar ran fast all the way to the basketball court. He was annoyed. He hated how the smallest incident of no significance got blown out of all proportion in this college. He hated missing quizzes and he had been sitting in the quiz since 9 pm before Navdeep's call at 11.<br/> He stopped awhile in front of the bus that just had come back from the city and watched the PhDs alight. \"Weird how most of the pretty ones landed up in biology.\" <br/>He found his friend pacing up and down the court furiously. Navdeep was pissed. He had an ego the size of Mount Everest and this slight to his esteem was going to be repaid in full. Samar sighed, accompanied Navdeep to the room of his adversary, and stood by while Navdeep threatened and yelled for what seemed like an eternity, till his anger subsided. He checked his watch. It was 2 am.<br/>He grumbled into his lemon tea, on his way back, \"Saale, teen ghante chaud marne ki kya zaroorat thi?\" <br/>He walked back into the quiz, which went on for an hour more, but he had missed a great deal.<br/> Going back to his room, rinsing his feet in the flood around the water cooler, and almost breaking his neck because of the stupid, uptight girl with her hair in a bun, he slammed the door shut. He was tired, angry and sleepy, but things needed to be downloaded and with the net speed he expected the song to take all night. Looked like an allnighter for him. Well, he wouldn't attend the classes. He had no guilty conscience about bunking. Atleast the physics major students were united about one thing. <br/>** <br/>3.15 am <br/>Mitaali was four floors above Samar, and she was rinsing her feet too. There was a sudden flood of cold water from the partition that divided the boys' wing from the girls'. She idly wondered why someone would want to pour water through a partition that was clearly very solid. She supposed it was funny.<br/>Walking to her balcony, she caught sight of the floor above the canteen. With a pang of annoyance, she observed that it was never empty. Didn't people ever sleep in this college?<br/> She turned her thoughts to the single cultural event that took place the entire semester. She wanted to dance, but not the type of dance that inevitably took place every Republic Day and Independence Day.<br/>She went downstairs to fill her water bottle. While passing the dark canteen, she thought she heard something move behind her. In a panic she ran outside and found herself wading in a sea of different coloured bins. These environment people. God. She tripped her way past them and almost slipped, saving herself just in time before decapitating the boy with the sour face.<br/> She walked back to her room before the gurudwara started their morning prayers and she cursed her luck. She wouldn't be able to sleep again.<br/> **",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(13);
			$article->author()->attach(15);
			$article->issue()->attach(1);

				// Neeraj: Confessions of a Utopian
			Article::create(
				array(
					'title' => "Confessions of a Utopian",
					'content' => "I opened my eyes in the middle of a chaos<br/>Gazed at the folks and thought<br/>Life brings moments of cheers and pain for each <br/>But what deeds comprise our  I beseech.<br/>Reason is the code to decipher the truth camouflaged <br/>While fallacies bring delusions and groups amok <br/>A handful of hidden people now rule the world feeding their greed <br/>And keep the crowds in illusions playing with their creeds.<br/><br/>Among the crowds lie groups of all kind <br/>One holds people frivolous, vacuous and intemperate serving their self centered creeds <br/>While one falls prey to the predators of mafia breeds <br/>One that dominates has kids (apparently grown-ups) who boggle and vacillate <br/>And the small one which fights the evil out and inside (within one's self) <br/> <br/>Parts of you and me wander in each <br/>While a few of us search for the lost bits of peace <br/>That's why the mood swings when my socials call <br/>Numbness takes over and I'm lost in thoughts  <br/> <br/>I run away from you 'cause I've chosen a different path <br/>It may not be for long that I'm gonna last <br/>I respect the emotional bonds but I've got to carry on <br/>I hold your smiles in heart, the glances, the moments and all <br/>And (laughs) I seem to have forgotten a few social protocols.  <br/> <br/>I don't claim I do a lot nor do I blame the spectators either <br/>May be its an uproar that will fade or a phase that will pass <br/>A state of mind that emerged out of a trial <br/>Or an obsession built on a fantasy <br/>Whateverwe have a free will <br/>What we choose to do makes us who we are. <br/> I don't shout aloud 'cause there is still lot to learn <br/>But inside lies a spark which might be ready to burn <br/>I dream of a Utopia that we all must earn!<br/>",
					'notes' => "",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(14);
			$article->author()->attach(19);
			$article->issue()->attach(1);

			Article::create(
				array(
					'title' => "India matters to us but we want to matter to India more",
					'content' => "Manthan Interviews the Chairman of the Board of Governors of IISER Mohali - Dr. Raghunath Anant Mashelkar.   <br/>Dr. Raghunath Anant Mashelkar(FRS), He served for over eleven years as the Director General of the Council of Scientific and Industrial Research, world's largest chain of publicly funded industrial R&D institutions, with thirty-eight laboratories and about 20,000 employees. Dr. Mashelkar is the former President of the Indian National Science Academy and the UK Institution of Chemical Engineers (2007-8). He is the third Indian engineer to have been elected as Fellow of Royal Society (FRS), London. He was elected foreign associate of the United States National Academy of Sciences in 2005. He was elected as the foreign associate of Australian Academy of Technological Sciences and Engineering. He is the first Indian to have received this honour. He was elected foreign fellow of US National Academy of Engineering (2003), Fellow of Royal Academy of Engineering, UK (1996), Fellow of the National Academy of Sciences, USA, Fellow of American Associatoin of Arts and Sciences, and Fellow of World Academy of Art & Science, USA (2000). Twenty-six universities have honoured him with honorary doctorates, which include University of London, University of Salford, University of Pretoria, University of Wisconsinand Delhi University.  Dr. Mashelkar was honoured with the Padmashri (1991) and Padmabhushan (2000) by the President of India. Dr. Mashelkar is presently the president of Global Research Alliance, a network of publicly funded research and development institutes from Asia-Pacific, South Africa, Europe and USA with over 60,000 scientists. He is also the President of India's National Innovation Foundation.<br/>Q. From Mashel to Raghunath Mashelkar tell us something about your journey, any particular incidents that you would like everybody to know.<br/>I was born in Mashel, that is how I draw my name Mashelkar.  I was born into a very poor family. My father died when I was six and my mother moved to Girgaon, Prarthanasamaj, in south Bombay.  I went to a municipal school where I studied in Marathi, until the 11th standard,  which used to be the SSC, . Getting two meals a day was a big challenge for me. I couldn't get admission to a good school because I could not pay the admission fees on time. So I had to go to an ordinary school; but it had really great teachers, very enlightened teachers. One of them changed my life, Principal Bhave, who taught us physics.<br/>In my SSC, I stood 11th among 35000 students, but I was about to leave school because my mother could not afford it, but I got  Rs. 60 per month, for 6 yrs from Sir Dorabji Tata's trust. That was how I could study. I used to go to that Bombay House in Bombay, Tatas had all their offices there. Today, I go there as a member of Board of Directors of Tata Motors, so the wheel has turned a full circle. But that happened because of the Rs. 60 they gave me at that time. I think there is a lesson there, that there are hundreds of thousands of Mashelkars; if they are given the support, then they can definitely do something. Later on I went to Jai Hind College, and then went for  Chemical Engineering in UDCT. I did my PhD with Dr. M. M.  Sharma, who became the first Indian Engineering Scientist to become the fellow of the Royal Society, which as you know is one of the highest honours in science.<br/>Q. You have been DG of CSIR for about 11 years;  that too during a period widely regarded as transformation phase of CSIR. How challenging was it?<br/> The challenge with CSIR is that there were forty laboratories scattered all over  India. There was diversity not only in the geography but in culture, languages they speak and so on. It was a big challenge to bring unity in this diversity.In my first year  as CSIR DG, I visited all the 40 laborato-ries, went  to the work floors, and interacted with the staff. In order to bring entire CSIR together we created CSIR  vision strategy, to be achieved by 2003.  Dr. A.P.J Abdul Kalam  asked me \" Mashelkar why 2003 why not 2020\". I replied \"I won't be DG in 2020 and  I would like to be judged when I am in the position\". The vision of creating the TEAM CSIR became possible because of vision document.  This transformation of CSIR in the 90's is listed among the top 10 scientific achievements of India in Jayant Narlikar's book.  <br/>Q. India before independence saw a lot of individual achievement but after independence it was more of collective effort by organisations like CSIR, CSIO etc. Is  this because of changes in policy?<br/>A: I think there are a number of factors responsible  for it. When people like  Sir C V Raman, J C Bose, S N Bose were involved in scientific research, the world was different. Then it started to change, technologies, access to knowledge everything changed. Today a great man like Prof. C N R Rao has to send samples abroad. We don't have a level playing field.  As we moved along, struggling with poverty, our ability to interact became very poor. To stay cutting edge you not only require tools and techniques but access; access to knowledge, information, events,  I would say we failed to get a Nobel prize, but how many Nobel laureates have been produced by developing world so far? 3 - 3 as in I am counting C V Raman for the work done in India not Chandrashekhar for his work in US, in which our contribution is not bad. With more funding and establishment of new brand institutes like IISERs we can expect to have path breaking individual efforts in near future.      <br/> Q. You were associated with the whole Intellectual Property Rights movement bringing the patent of turmeric back to India. How important is it for scientists to be aware of something like IPR in India?<br/>It is very important. Knowledge should be monitisable;  since at some point of time you would want to make profit out it. It is essential that you own that knowledge legally. One should own knowledge legally; otherwise anyone can make money out of it. Society gives us the right to use that knowledge exclusively. Indian ideas should create wealth within India, not in Europe, US and Japan and in order to do that we must have ownership and in order to have ownership we must have patents. In IISER you do science and some of that science  should  potentially be convertible to technology, not all. <br/>So wherever you find that you have a breakthrough which can create wealth you must go for patents so that  you own it. Through that ownership you can create  money for yourself, for the institute, or give it away; \"this issue had not been addressed for a long time 1898 to 1998; from Bose to Basmati\" that's your own choice. India has lost quite a bit because we did not patent. Story goes that Sir J C Bose was the originator of the iron-mercury ion  platform technology which is used today for wireless communication. He was the one who propounded this idea not Marconi but he refused to patent it, now our textbooks say that Marconi was the inventor and not JC Bose; that was 1898. Again in 1998, Basmati rice was  patented by the US I fought in bringing that back to India. So this issue had not been addressed for a long time 1898 to 1998; from Bose to Basmati. We cannot continue like that. We have to be smart. Knowledge - buy it or create it. IISERs are an example for recent developments in the direction of creating knowledge within our nation. What more must India do  to make it's base stronger?<br/>Yes. IISERs, as we all know, are Indian Institutes of Science Education and Research; it has two integral components one being  education and the  other research.<br/>In Education,  what you do is, you look at the existing knowledge and disseminate it. Research creates new knowledge and  we have said education and  research because we expect you to not only to disseminate the existing knowledge but also in creating new knowledge. Now in creating new knowledge and by new I mean new to the world, India's share is very small, which is actually very sad.<br/>If you look at research papers from all over the world India's contribution  will not even  count for 2-3 %. This cannot be. If you look at America, they are a big superpower because they are big knowledge creators but also having created that knowledge they know how to create wealth out of it; so IISERs will have to continue to elevate India's position in the formation of novel, innovative ideas across all scientific communities.<br/>Secondly  the world's knowledge economy has come to stake. More than 50% of the world's GDP  today is contributed through  knowledge economy. Production of knowledge, distribution of knowledge, privatization of knowledge, etc. When you buy a CD you buy knowledge not plastic and your paying for it. When you buy a software, you are buying knowledge and your are paying for it; and that constitutes a rich significant fraction of the economy. Partly we got into the software services, but we have not created products of our own; we have been providing services using our large manpower. More than 600000 software engineers whose average age is 26.5 years are contributing to 1/3rd of our export and this is just  the tip of the iceberg. There is so much more that  we can achieve. Here IISERs will have to play a major role in formulating this trend of generating scientific innovation.<br/>Your message to young aspiring students<br/>I would like IISERs to be among the top 100 institutes in the world. Sadly none of the  Indian institutes and universities figure in the world rankings today. Harvard will always be No.1. No matter what happens; there are other universities as well Princeton, Oxford, MIT, Cambridge, Cal tech, Yale, etc. Even Singapore University, other Asian universities like Tokyo University, Universities  from China, Institutes from  Korea even have started figuring among  the top listed colleges. There is nothing from  India. IISERs should come  first in the top hundred and then aim to be in the top twenty. That's the clear message.<br/>\"IISERs should come  first in the top hundred and then aim to be in the top twenty in world\"<br/>By 2050 I will not be there but I would like to see IISERs  bringing  Nobel prizes for science and research. And in any institution  two things are important, there has to be excellence and relevance. What I talked about previously was excellence. Your brilliance should be such that you  bring the highest honour to the country. But thats not enough; your contribution to science  must have relevance to the country.<br/>USSR was ahead of USA in the space race. SPUTNIK is a classic example. But when they were doing that, there were queues for bread on the streets, that means there was something missing. They were creating knowledge, but they were creating something that was not relevant to the society.I don't want India to be like that.It shouldn't be like while we are winning Nobel prizes and Olympic  medals our people go hungry.<br/>I think we have to worry about the fact that today 800 million people  have an income less than hundred rupees a day. We have to worry about the fact that there are poor people who  do not have access to education and health. These are things that no one else is going to work on. These are our very own problems. Why should someone else worry about these things? Why can't we do cutting edge science that would deal with such issues - cutting edge science to drive away poverty and bring about equitable distribution of wealth among the masses. India matters to us but we want to matter to India more. Something that we should never lose sight of.<br/>(We are grateful to Prof. N. Sathyamurthy (Director IISER Mohali) and Prof. K.S Viswanathan (Faculty in Charge - Manthan) for timely advices and support.) <br/>Prof . Mashelkar delivering 5th foundation day lecture - More from Less for Many at  IISER Mohali",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(15);
			$article->author()->attach(13);
			$article->issue()->attach(1);

			Article::create(
				array(
					'title' => "Rock: Then and Now",
					'content' => "Music has always been a major influence for the youth. It's a powerful vocalisation, a great platform, besides being, well, music. It's pretty sad that recently the music scene worldwide seems to have stagnated. The 90s and post 2000 period saw the spawning of many new artists and a wave of experimental genres that didn't really get a unified name, but were instrumental in the further agitation of bands that fell into accepted classification, while themselves bringing about revolution in music. Compared to the rock and blues scene that developed alternative to the folk and saxophone sounds of the 60s and the rebellion and anger that fueled the 80s in terms of hard rock, metal and growing hip-hop, this large variety of artists and bands made the 90s undefinable in terms of a single emotion or genre. The divisions did grow clearer. This time has reverted to the pop culture, like the 60s, but without the promise of the further development of rock, according to some. 2011 top artists include Adele, Foster The People, Lady Gaga, Katy Perry, Nicki Minaj (billboard.com) all of whom show a progressive preference to pop.The return of Maroon 5 with 'Hands All Over' is probably a small glitch in this otherwise seamless movement towards pop, though they show a very strong element of pop in their music.<br/> There is a small spattering of rock music that does exist today. There are many bands that aren't very widely recognized, and some have mostly singles to their credit. A few top rock songs today are, thanks to toprocksongs.net and Wikipedia - <ul> <li>'Rope' - Foo Fighters (headed by the drummer of grunge band Nirvana, Dave Grohl)</li> <li>'Help Is On The Way' - Rise Against</li> <li>'Shake Me Down' - Cage The Elephant</li> <li>'The Cave' - Mumford & Sons</li> <li>'My Body' - Young The Giant</li> </ul> <br/> It's very difficult to define rock as a genre, primarily because of the massive variations in the multiple sub-genres that spawned from it. However, the roots of rock can be traced back to the 1940s and 1950s R&B and 'Rock and Roll'. The 'Roll' part of it, the pop half of the phrase was later done away with, when the two bifurcated into distinct genres. Rock then began to draw influences from country music, jazz, a lot of blues and some classical instrumental techniques were developed further, slowly evolving to become exclusively used in rock.<br/> The wide popularity and the growing number of devout fans of rock was also helped along by rock coming to endorse certain idealogies and emotions, making it easier to identify with, and to unify enitre communities that lived thousands of miles apart. This was no ordinary power, and rock shot to the position of being more than a genre of music. It became a lifestyle and philosophy.<br/> The period of the progression of rock from the 60s to the 80s is nothing short of epic. Thoughts were played and voices were heard, and people realised what was wrong. Tradition was questioned and deviations started appearing. Rock transcended to more than music, and people clung to the idea rock and its players represented. With time, soft rock became hard rock. Hard rock became heavy metal. Punk rock rose to power (with the Sex Pistols and the Ramones), along with heavy metal (Iron Maiden, Def Leppard, Van Halen, Diamond Head, Vardis, virtuoso Yngwie Malmsteem), ingraining itself into pop culture as well, to the extent that post punk turned out to be a major sub-genre (The Who, Frank Zappa, The Velvet Underground). While all this occupied mainstream attention, alternative rock started developing slowly, but steadily.<br/> The 1990s were a good, solid grounding and expansion of rock, and the development of many more sub-genres like grunge (Nirvana, Pearl Jam, Soundgarden, Alice in Chains), indie rock (The Cranberries, Superchunk), pop punk (Weezer, Pennywise, Green Day), alternative metal (Pantera, Sepultura, Nine Inch Nails) and nu metal (Limp Bizkit, Korn, Linkin Park, Staind), along with many crossover acts between rap and rock (RHCP, Rage Against the Machine, Kid Rock) ensured that the alternative music of the 80s were alternative no more and shot to mainstream popularity. Many English bands also emerged in a genre called 'Britpop' (wikipedia.com), the most popular of which is unquestionably Coldplay (debuted with their album 'Parachutes' in 2000).<br/> While the post millenium mark did come up with many new sounds (retrometal, contemporary heavy metal, metalcore), many argue that none of these genres can be identified as 'rock' seeing as the roots of rock cannot be heard in the music. Others argue that the decade is probably just a sleepy one, and we're due for another revolutionary movement in the music industry to sweep the world and all rock needs is an 'artist with something different, with more of the tradition of the foundations of rock - great melodies and songwriting, hard guitars and a kick-ass kind of attitude.\" Elliot Wilson (founder and CEO of Rap Radar).<br/> As of now rap is ruling the worldwide music and rock is surviving only through its derivatives. What rock needs right now is a band 'with a dynamic frontman, that has a sound that can capture the imagination of millions\" (Gil Kaufman). While 2011 did have many acts from rockers lined up, like U2, Blink 182, RHCP, Radiohead, Coldplay and the Foo Fighters, what we're looking for is for an act to dramatically change thought and bring together the stratified lovers of rock music all in one huge community. That is a lot to ask for, but to top something as powerful and revolutionary as the uprising of rock, the re-revival of rock will be no walk in the park.",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(16);
			$article->author()->attach(15);
			$article->issue()->attach(1);

			Article::create(
				array(
					'title' => "Sanghol Six feet under",
					'content' =>"I cannot help but mention a particularly hilarious incident that indirectly led to this trip. I was in Prof. Arvind's office with a friend.  As we were leaving after our discussion our attention was drawn by the wallpaper on Prof. Arvind's desktop. It was the photograph of a brick structure, the like of which I had never seen before. The structure consisted of three concentric circles each joined with the other by lines of bricks along different radial directions. From the looks, the bricks appeared old. But before I could say something I heard my friend saying, 'I suppose that those are the foundations of our institute!' What I remember now is that I could not stop laughing for a very long time that day and Prof. Arvind assuring us that they were not the foundations of our institute of the future but an ancient Buddhist archaeological site called Sanghol, not far from Chandigarh. <br/>On one fine Sunday morning, Ritabrata, me, George and Mohit boarded a bus and around fifty minutes later found ourselves in the village of Uchha Pind Sanghol. The bus-stop was a small market place, probably the nerve-centre of the village. None of us were from Punjab; one was a Keralite, one a Marathi and two from Bengal. Even our Hindi was not that great. So our Punjabi friends back at the institute were worried with how things would go. Despite all the fears of our friends, we made it successfully to the museum, a curious two storied brick coloured cylindrical building. There was no one at the ticket-counter, the place looked deserted and the washroom was dilapidated. There was a security guard lazily sitting in the shade of a tree in the compound, chatting with another staff. This was a place where the foot-fall was low and the latter told us that most of the visitors were students from universities. A lady appeared from somewhere and handed us four yellow tickets, with Sanghol and Incredible India printed on them.<br/>The archaeological relics recovered from here date back to the Indus Valley Civilization. Unlike Harappa or Mohenjodaro, this place had a rural to semi-urban settlement. The time-line of these relics (1700 BC-1300 BC) corresponded to the declining phase of the Indus Valley Civilization. Urns of different shapes and sizes, bronze and copper tools were on display. To the untrained eye, the pottery would not seem much different from those produced today in the villages of India. The pottery shards even had designs made out of dots which were barely visible after three and a half millennia. There were miniature clay carts, terracotta toys, dolls and animal and female figurines. Ornaments of bones and semi precious gems were plenty. The item that caught my attention most was a vessel used as a small water storage tank with two openings. The lower one resembled the outlets in modern day water filters. Of special mention were also the musical wind instruments made from bones.<br/>The ground floor of the museum  housed items from the later phases of Indian history. The change was mostly noticeable in pottery and there was increased use of iron tools. Achaemenids, Greeks, Scythians, Greco-Bactrians, Parthians, Kushans and the White Huns, they all came from the northwest and established powerful empires in the subcontinent between 600 BC and 600AD. From the east, mighty empires like the Maurya, Gupta and Pala conquered the area. Their legacies have been preserved by the findings of a large number of coins. Many coins depicting the Indo-Parthian king Gondophares I have been found from Sanghol. But the most abundant are coins showing kings Toramana and Mihirakula, which indicate a strong presence of Huns, a Central Asian nomadic tribe. Not only did they cause the fall of the already weakening Gupta empire but also plundered a large number of the Buddhist temples and monasteries on their way. <br/>We could not find out the cause of the abandoning of the Buddhist stupas and the monasteries but figured their grandeur on reaching the first floor of the museum. As many as 35 crossbars and 69 pillars had been recovered from the two major archaeological sites, all of them covered with exquisite geometric designs and reliefs of humans, Hindu-Buddhist gods and animals.There were depictions of people of different professions, depiction of apsaras and maidens standing in balconies; mother carrying child and my personal favourite, a series of images of Salabhanjika. All these figures had a sense of tenderness about them which was a special characteristic of the Mathura School of Art and the Gandhara School of Art that flourished in North India under the Kushans. One slab, probably depicting a court scene, caught our eye. There was a ruler, seated on a throne with the attendants. But there was another distinct figure who was paying homage to the king, dressed in robes which were definitely not Indian. An ambassador from the middle-east perhaps!<br\>A thirty minute walk from the museum through the village and its fields took us to the ruins of the stupa surrounded by fields of paddy, sugarcane and bitter-gourd. This was the brick structure whose photograph I had seen before. Nothing much was left of it, the central and the smaller hemispherical domes were gone, only the base remained. George, however, thought that what we were looking at was the roof and insisted that we should not walk on it; perhaps it would cave in after nearly two thousand year47existence! He actually sat under a tree with a grave face while the others were running all over what were walls of the chambers of the stupa until a caretaker assured him that it was the base not the roof. Through an exchange of highly approximated Hindi from both sides we got to know that there was a mound sitting on top of it before being dug out. Local villagers would often find human images from the area. That was how it was uncovered in the first place.<br\>Taking a short cut we reached a second and smaller stupa along with a monastery. Even here, all that remained was the base. The monastery had rooms for the monks about the same size as our rooms in the IISER Mohali hostels!<br\>We were finally done with our 'exploration'. Nearly one and a half kilometre on foot led us to an area with restaurants adjacent to a petrol-pump. We tried to have lunch from two of them, both tasted horrible. I do not recall their names but I remember that one of them had toilets for Ladies and Giants rather than Gents! <br\>Around four o'clock we started for Chandigarh. Thus our Sanghol visit came to a close. On the way back I realized that the surrounding landscape, though plain land was not flat but undulating. Perhaps there were more to them than met the eyes. Perhaps they were concealing beneath them whole cities which would suddenly pop up one day driven by human curiosity. Only time could tell.....",
					'thumbnail' => "thumbs/5",
					'deleted' => false,
					'published' => true
				)
			);

			$article = Article::find(17);
			$article->author()->attach(18);
			$article->issue()->attach(1);


			Author::create(
				array(
					'name' => 'Mohit Satish Tanga',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'I am a foolish guy!! student of physics (whatever that means!!)',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Vikesh Siddhu',
					'affiliation' => 'MS Student (08 Batch), General Secretary SRC (2011-12)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Ramandeep Johal',
					'affiliation' => 'Faculty, Physics Department',
					'description' => 'Some Description',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Debanjana Kundu',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Bodhisatta Nandy',
					'affiliation' => 'PhD Student, Biology',
					'description' => 'Fly Guy <br/>Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Sharmi Sen',
					'affiliation' => 'MS Student (10 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Keshav Agarval',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Neeraj D.',
					'affiliation' => 'MS Student (10 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Chetna Sood',
					'affiliation' => 'PhD Student, Humanities',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Manas Arun Samant',
					'affiliation' => 'MS Student (10 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Curi(e/ous) Club',
					'affiliation' => 'Student Club (Chemistry)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Suguna Sathyamurthy',
					'affiliation' => 'Honorary Counsellor',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Manthan',
					'affiliation' => 'The Editorial Board',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Kshitij Mohan',
					'affiliation' => 'MS Student (10 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Vrinda Ravi Kumar',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Srijit Mukherjee',
					'affiliation' => 'MS Student (11 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Jagadish Prasad Hazra',
					'affiliation' => 'MS Student (10 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Debmalya Das',
					'affiliation' => 'PhD Student, Physics',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Danish Shamoon',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Rishi Raj Trivedi',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Nikhil Kumar',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Amita Agrawal',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Mayank Chugh',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Dr. Kausik Chattopadhyay',
					'affiliation' => 'Faculty, Biology Department',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Abhilasha Joshi',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Dr. Anu Sabhlok',
					'affiliation' => 'Faculty, Humanities Department',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Dr. R. Vijaya Anand',
					'affiliation' => 'Faculty, Chemistry Department',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Achyut Priya Shukla',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Vinit Kumar',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Ankit Kumar',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Gagan Preet Singh',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Nilmani Singh',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Rajni Ranjan',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Kirandeep Kaur',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Titiksh Gupta',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Srishti Singh',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Aditya Maheshwari',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Jithin M. Paul',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Nishtha Agarwal',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Sonia Sharma',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Amol Deshmukh',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Anurag Kanaujia',
					'affiliation' => 'MS Student (07 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Surajet Das',
					'affiliation' => 'MS Student (08 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);

			Author::create(
				array(
					'name' => 'Akanksha Sharma',
					'affiliation' => 'MS Student (09 Batch)',
					'description' => 'Something Here!!',
					'img' => 'thumbs/3'
				)
			);
		}
	}