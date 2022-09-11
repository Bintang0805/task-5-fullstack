<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::makeDirectory("public/images/articles");

        File::copy(public_path('assets/img/articles/m1.jpg'), public_path('storage/images/articles/m1.jpg'));
        File::copy(public_path('assets/img/articles/c1.jpg'), public_path('storage/images/articles/c1.jpg'));
        $data = [
            [
                "id" => 1,
                "title" => "The Goldilocks Rule: How to Stay Motivated in Life and Business",
                "content" => "In 1955, Disneyland had just opened in Anaheim, California, when a ten-year-old boy walked in and asked for a job. Labor laws were loose back then and the boy managed to land a position selling guidebooks for $0.50 apiece.<br><br>

                Within a year, he had transitioned to Disney’s magic shop, where he learned tricks from the older employees. He experimented with jokes and tried out simple routines on visitors. Soon he discovered that what he loved was not performing magic but performing in general. He set his sights on becoming a comedian.<br><br>

                Beginning in his teenage years, he started performing in little clubs around Los Angeles. The crowds were small and his act was short. He was rarely on stage for more than five minutes. Most of the people in the crowd were too busy drinking or talking with friends to pay attention. One night, he literally delivered his stand-up routine to an empty club.<br><br>

                It wasn’t glamorous work, but there was no doubt he was getting better. His first routines would only last one or two minutes. By high school, his material had expanded to include a five-minute act and, a few years later, a ten-minute show. At nineteen, he was performing weekly for twenty minutes at a time. He had to read three poems during the show just to make the routine long enough, but his skills continued to progress.<br><br>

                He spent another decade experimenting, adjusting, and practicing. He took a job as a television writer and, gradually, he was able to land his own appearances on talk shows. By the mid-1970s, he had worked his way into being a regular guest on The Tonight Show and Saturday Night Live.<br><br>

                Finally, after nearly fifteen years of work, the young man rose to fame. He toured sixty cities in sixty-three days. Then seventy-two cities in eighty days. Then eighty-five cities in ninety days. He had 18,695 people attend one show in Ohio. Another 45,000 tickets were sold for his three-day show in New York. He catapulted to the top of his genre and became one of the most successful comedians of his time.<br><br>

                His name is Steve Martin.<br>
                Steve Martin (How to Stay Motivated in Life and Work)<br>
                Steve Martin performing in Chicago, Illinois in 1978. (Photo by Paul Natkin.)<br>
                How to Stay Motivated<br>
                I recently finished Steve Martin's wonderful autobiography, Born Standing Up.<br><br>

                Martin’s story offers a fascinating perspective on what it takes to stick with habits for the long run. Comedy is not for the timid. It is hard to imagine a situation that would strike fear into the hearts of more people than performing alone on stage and failing to get a single laugh. And yet Steve Martin faced this fear every week for eighteen years. In his words, “10 years spent learning, 4 years spent refining, and 4 years as a wild success.”<br><br>

                Why is it that some people, like Martin, stick with their habits—whether practicing jokes or drawing cartoons or playing guitar—while most of us struggle to stay motivated? How do we design habits that pull us in rather than ones that fade away? Scientists have been studying this question for many years. While there is still much to learn, one of the most consistent findings is that the way to maintain motivation and achieve peak levels of desire is to work on tasks of “just manageable difficulty.”<br><br>

                The Goldilocks Rule<br>
                The human brain loves a challenge, but only if it is within an optimal zone of difficulty. If you love tennis and try to play a serious match against a four-year-old, you will quickly become bored. It’s too easy. You’ll win every point. In contrast, if you play a professional tennis player like Roger Federer or Serena Williams, you will quickly lose motivation because the match is too difficult.<br><br>

                Now consider playing tennis against someone who is your equal. As the game progresses, you win a few points and you lose a few. You have a good chance of winning, but only if you really try. Your focus narrows, distractions fade away, and you find yourself fully invested in the task at hand. This is a challenge of just manageable difficulty and it is a prime example of the Goldilocks Rule.<br><br>

                The Goldilocks Rule states that humans experience peak motivation when working on tasks that are right on the edge of their current abilities. Not too hard. Not too easy. Just right.<br><br>

                Martin’s comedy career is an excellent example of the Goldilocks Rule in practice. Each year, he expanded his comedy routine—but only by a minute or two. He was always adding new material, but he also kept a few jokes that were guaranteed to get laughs. There were just enough victories to keep him motivated and just enough mistakes to keep him working hard.<br><br>

                The Goldilocks Rule (How to Stay Motivated in Life and Work)<br><br>

                Measure Your Progress<br>
                If you want to learn how to stay motivated to reach your goals, then there is a second piece of the motivation puzzle that is crucial to understand. It has to do with achieving that perfect blend of hard work and happiness.<br><br>

                Working on challenges of an optimal level of difficulty has been found to not only be motivating, but also to be a major source of happiness. As psychologist Gilbert Brim put it, “One of the important sources of human happiness is working on tasks at a suitable level of difficulty, neither too hard nor too easy.”<br><br>

                This blend of happiness and peak performance is sometimes referred to as flow, which is what athletes and performers experience when they are “in the zone.” Flow is the mental state you experience when you are so focused on the task at hand that the rest of the world fades away.<br><br>

                In order to reach this state of peak performance, however, you not only need to work on challenges at the right degree of difficulty, but also measure your immediate progress. As psychologist Jonathan Haidt explains, one of the keys to reaching a flow state is that “you get immediate feedback about how you are doing at each step.”<br><br>

                Seeing yourself make progress in the moment is incredibly motivating. Steve Martin would tell a joke and immediately know if it worked based on the laughter of the crowd. Imagine how addicting it would be to create a roar of laughter. The rush of positive feedback Martin experienced from one great joke would probably be enough to overpower his fears and inspire him to work for weeks.<br><br>

                In other areas of life, measurement looks different but is just as critical for achieving a blend of motivation and happiness. In tennis, you get immediate feedback based on whether or not you win the point. Regardless of how it is measured, the human brain needs some way to visualize our progress if we are to maintain motivation. We need to be able to see our wins.<br><br>

                Two Steps to Motivation<br>
                If we want to break down the mystery of how to stay motivated for the long-term, we could simply say:<br><br>

                Stick to The Goldilocks Rule and work on tasks of just manageable difficulty.<br>
                Measure your progress and receive immediate feedback whenever possible.<br>
                Wanting to improve your life is easy. Sticking with it is a different story. If you want to stay motivated for good, then start with a challenge that is just manageable, measure your progress, and repeat the process.",
                "image" => "/images/articles/m1.jpg",
                "user_id" => 1,
                "category_id" => 1,
            ],
            [
                "id" => 2,
                "title" => "For a More Creative Brain Follow These 5 Steps",
                "content" => "early all great ideas follow a similar creative process and this article explains how this process works. Understanding this is important because creative thinking is one of the most useful skills you can possess. Nearly every problem you face in work and in life can benefit from innovative solutions, lateral thinking, and creative ideas.<br><br>

                Anyone can learn to be creative by using these five steps. That's not to say being creative is easy. Uncovering your creative genius requires courage and tons of practice. However, this five-step approach should help demystify the creative process and illuminate the path to more innovative thinking.<br><br>

                To explain how this process works, let me tell you a short story.<br>
                A Problem in Need of a Creative Solution<br>
                In the 1870s, newspapers and printers faced a very specific and very costly problem. Photography was a new and exciting medium at the time. Readers wanted to see more pictures, but nobody could figure out how to print images quickly and cheaply.<br><br>

                For example, if a newspaper wanted to print an image in the 1870s, they had to commission an engraver to etch a copy of the photograph onto a steel plate by hand. These plates were used to press the image onto the page, but they often broke after just a few uses. This process of photoengraving, you can imagine, was remarkably time consuming and expensive.<br><br>

                The man who invented a solution to this problem was named Frederic Eugene Ives. He went on to become a trailblazer in the field of photography and held over 70 patents by the end of his career. His story of creativity and innovation, which I will share now, is a useful case study for understanding the 5 key steps of the creative process.<br><br>

                A Flash of Insight<br>
                Ives got his start as a printer’s apprentice in Ithaca, New York. After two years of learning the ins and outs of the printing process, he began managing the photographic laboratory at nearby Cornell University. He spent the rest of the decade experimenting with new photography techniques and learning about cameras, printers, and optics.<br><br>

                In 1881, Ives had a flash of insight regarding a better printing technique.<br><br>

                “While operating my photostereotype process in Ithaca, I studied the problem of halftone process,” Ives said. “I went to bed one night in a state of brain fog over the problem, and the instant I woke in the morning saw before me, apparently projected on the ceiling, the completely worked out process and equipment in operation.”<br><br>

                Ives quickly translated his vision into reality and patented his printing approach in 1881. He spent the remainder of the decade improving upon it. By 1885, he had developed a simplified process that delivered even better results. The Ives Process, as it came to be known, reduced the cost of printing images by 15x and remained the standard printing technique for the next 80 years.<br><br>

                Alright, now let's discuss what lessons we can learn from Ives about the creative process.<br><br>

                The printing process developed by Frederic Eugene Ives is a great example of the optimal creative process. <br>
                The printing process developed by Frederic Eugene Ives used a method called “halftone printing” to break a photograph down into a series of tiny dots. The image looks like a collection of dots up close, but when viewed from a normal distance the dots blend together to create a picture with varying shades of gray. (Source: Unknown.)<br>
                The 5 Stages of the Creative Process<br>
                In 1940, an advertising executive named James Webb Young published a short guide titled, A Technique for Producing Ideas. In this guide, he made a simple, but profound statement about generating creative ideas.<br><br>

                According to Young, innovative ideas happen when you develop new combinations of old elements. In other words, creative thinking is not about generating something new from a blank slate, but rather about taking what is already present and combining those bits and pieces in a way that has not been done previously.<br><br>

                Most important, the ability to generate new combinations hinges upon your ability to see the relationships between concepts. If you can form a new link between two old ideas, you have done something creative.<br><br>

                Young believed this process of creative connection always occurred in five steps.<br><br>

                Gather new material. At first, you learn. During this stage you focus on 1) learning specific material directly related to your task and 2) learning general material by becoming fascinated with a wide range of concepts.<br>
                Thoroughly work over the materials in your mind. During this stage, you examine what you have learned by looking at the facts from different angles and experimenting with fitting various ideas together.<br>
                Step away from the problem. Next, you put the problem completely out of your mind and go do something else that excites you and energizes you.
                Let your idea return to you. At some point, but only after you have stopped thinking about it, your idea will come back to you with a flash of insight and renewed energy.<br>
                Shape and develop your idea based on feedback. For any idea to succeed, you must release it out into the world, submit it to criticism, and adapt it as needed.<br>
                creative-process<br><br>

                The Idea in Practice<br>
                The creative process used by Frederic Eugene Ives offers a perfect example of these five steps in action.<br><br>

                First, Ives gathered new material. He spent two years working as a printer's apprentice and then four years running the photographic laboratory at Cornell University. These experiences gave him a lot of material to draw upon and make associations between photography and printing.<br><br>

                Second, Ives began to mentally work over everything he learned. By 1878, Ives was spending nearly all of his time experimenting with new techniques. He was constantly tinkering and experimenting with different ways of putting ideas together.<br><br>

                Third, Ives stepped away from the problem. In this case, he went to sleep for a few hours before his flash of insight. Letting creative challenges sit for longer periods of time can work as well. Regardless of how long you step away, you need to do something that interests you and takes your mind off of the problem.<br><br>

                Fourth, his idea returned to him. Ives awoke with the solution to his problem laid out before him. (On a personal note, I often find creative ideas hit me just as I am lying down for sleep. Once I give my brain permission to stop working for the day, the solution appears easily.)<br><br>

                Finally, Ives continued to revise his idea for years. In fact, he improved so many aspects of the process he filed a second patent. This is a critical point and is often overlooked. It can be easy to fall in love with the initial version of your idea, but great ideas always evolve.<br><br>

                The Creative Process in Short<br>
                “An idea is a feat of association, and the height of it is a good metaphor.”<br>
                —Robert Frost<br>
                The creative process is the act of making new connections between old ideas. Thus, we can say creative thinking is the task of recognizing relationships between concepts.<br><br>

                One way to approach creative challenges is by following the five-step process of 1) gathering material, 2) intensely working over the material in your mind, 3) stepping away from the problem, 4) allowing the idea to come back to you naturally, and 5) testing your idea in the real world and adjusting it based on feedback.<br><br>

                Being creative isn't about being the first (or only) person to think of an idea. More often, creativity is about connecting ideas.",
                "image" => "/images/articles/m1.jpg",
                "user_id" => 2,
                "category_id" => 2,
            ],
        ];

        DB::table('articles')->insert($data);
    }
}
