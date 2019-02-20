<?php

namespace App\Models;

class Bio
{

    public static function all()
    {
        return collect([
            [
                'name' => 'Mark Ciulla',
                'slug' => 'mark-ciulla',
                'image' => '/images/mark-ciulla.jpg',
                'candid_image' => '/images/mark-ciulla-candid.jpg',
                'large_image' => '/images/mark-ciulla-hero.jpg',
                'job_titles' => ["CPA | Managing Director"],
                "focus" =>  ["Wealth management, Investment planning", "Insurance design, Planning for closely held businesses, Planning for clients in the entertainment industry"],
                'content' => '
                    <div class="content-block">
                        <h5><em>"Trust comes first."</em></h5>
                        <p>
                            With 30 years of financial planning, investment and wealth management experience, Mark knows 
                            that trust is essential to every client relationship, and it’s a component he never takes for granted. 
                            As a Managing Director at Capital Advisors, Mark advises an incredibly diverse client base –from closely held business owners to entertainment industry leaders – 
                            on financial planning, investment, and estate planning issues. Clients value his methodical approach, 
                            which is born from his background as a CPA, where attention to detail is essential.
                        </p>
                    </div>
                    <div class="content-block">
                        <h5><em>"No two situations are ever the same."</em></h5>
                        <p>
                            Mark’s dedication to his clients comes through in the rapport he establishes from day one. 
                            He is known for his well-thought-out planning and the way he communicates these plans simply 
                            with his clients. His approach and relationships are also why most of his clients come to 
                            him via referral – and much of his client base has been with him his entire career. 
                            Mark takes all of his clients’ financial situations personally, with a sense of 
                            responsibility for their long-term financial wellbeing. 
                        </p>
                    </div>
                    <div class="content-block">
                        <h5><em>"This business is fluid and ever changing."</em></h5>
                        <p>
                            To remain on the cutting edge of the wealth management industry and service a diverse 
                            clientele, Mark’s approach is to stay at the forefront of financial trends. Learning all 
                            he can about economic developments, investment products, tax changes and planning 
                            opportunities has always been a passion of Mark’s. He started investing personally when he 
                            was just a teenager – before he could drive – because he was interested in the world of 
                            finance. Turning this early hobby into a career was a given for Mark, and working with 
                            clients allows him to share his deep knowledge and experience with others.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        "link" => "",
                        "title" => "Certified Public Accountant (CPA)"
                    ],
                    [
                        "link" => "",
                        "title" => "Accredited Investment Fiduciary® (AIF®)"
                    ],
                    [
                        "link" => "",
                        "title" => "FINRA Series 7, 24, 63 and 65 Registrations"
                    ],
                    [
                        "link" => "",
                        "title" => "Masters of Accounting & Financial Information from Cleveland State University"
                    ],
                    [
                        "link" => "",
                        "title" => "Worth magazine annual list of America’s Top Wealth Advisors"
                    ],

                ],
                'affiliations' => [
                    [
                        "link" => "",
                        "title" => "Ohio Society Certified Public Accountants (OSCPA)"
                    ],
                    [
                        "link" => "",
                        "title" => "Financial Planning Association (FPA)"
                    ],
                    [
                        "link" => "",
                        "title" => "Member, Chartered Financial Analysts Institute (CFAI)"
                    ],
                    [
                        "link" => "",
                        "title" => "Society of Financial Service Professionals"
                    ],
                    [
                        "link" => "",
                        "title" => "Financial Services Institute"
                    ],
                    [
                        "link" => "",
                        "title" => "Advisor Council for Lincoln Investment"
                    ],
                    [
                        "link" => "",
                        "title" => "Estate Planning Council of Cleveland"
                    ],
                ],
                'other-experience' => [
                    [
                        "link" => "",
                        "title" => "Worked in both audit and consulting at Ernst and Young (formerly Ernst and Whinney)"
                    ],
                ]
            ], // END MARK
            [
                'name' => 'Pat Hanratty',
                'slug' => 'pat-hanratty',
                'image' => '/images/pat-hanratty.jpg',
                'candid_image' => '/images/pat-hanratty-candid.jpg',
                'large_image' => '/images/pat-hanratty-hero.jpg',
                'job_titles' => ["CPA, CFP<sup>&reg;</sup> | Managing Director"],
                "focus" =>  ["Wealth management, Cash flow/Retirement, Investments"],
                'content' => '
                    <div class="content-block">
                        <h5><em>"We’re in the advice business."</em></h5>
                        <p>After three decades in the financial advice industry, Patrick is an expert at managing change. 
                        Whether it’s a shifting market, tax code or regulatory issue, he puts a high value on translating these changing issues into understandable and actionable advice for his clients. 
                        He’s also a key mentor for the Capital Advisors team, teaching and guiding staff on the industry and how they can lead it into the future. </p>
                    </div>
                   <div class="content-block">
                        <h5><em>"The best part is sitting down and talking."</em></h5>
                        <p>
                            Patrick’s role as mentor also translates into his client interactions. He finds the best part of his day is his face-to-face clients meetings. 
                            They allow him to not only learn more about his clients’ lives, but also help bring a client’s entire financial picture into focus. 
                            He sees himself as a financial quarterback and fiscal doctor for his clients – calling plays while prescribing the best course of action to align investments, 
                            taxes and business succession plans with goals. 
                        </p>
                   </div>
                   <div class="content-block">
                    <h5><em>"Mentoring is giving back."</em></h5>
                    <p>
                        As the first member of his family to earn a college degree, Patrick understands the importance of perseverance, patience – and having a trustworthy mentor. 
                        He works extensively with local high school and college students who are interested in finance, giving them a resource for advice and answers. 
                        He also spearheaded a program with a local university that allows college seniors to prepare and present a financial plan to experienced financial planners. 
                    </p>
                   </div>
                ',
                'certifications' => [
                    [
                        "link" => "",
                        "title" => "Certified Financial Planner (CFP®)"
                    ],
                    [
                        "link" => "",
                        "title" => "Certified Public Accountant (CPA)"
                    ],
                    [
                        "link" => "",
                        "title" => "Worth magazine annual list of America’s Top Wealth Advisors"
                    ],
                    [
                        "link" => "",
                        "title" => "Contributor to the nationally published book, \"Tips From the Top: Targeted Advice from America's Top Money Minds\" (Edited by Edie Milligan, Alpha Publishing)."
                    ],
                    [
                        "link" => "",
                        "title" => "FINRA Series 7, 24 and 63 Registrations"
                    ],
                    [
                        "link" => "",
                        "title" => "Masters in Finance from Cleveland State University"
                    ],
                    [
                        "link" => "",
                        "title" => "Bachelors in Accounting from Cleveland State University"
                    ],
                ],
                'affiliations' => [
                    [
                        "link" => "",
                        "title" => "Editorial advisor: Journal of Accountancy magazine"
                    ],
                    [
                        "link" => "",
                        "title" => "Member, The Financial Planning Association (FPA)"
                    ],
                    [
                        "link" => "",
                        "title" => "Member, Ohio Society of Certified Public Accountants (OSCPA)"
                    ],
                ],
                'board-memberships' => [
                    [
                        "link" => "",
                        "title" => "University Partnerships"
                    ],
                    [
                        "link" => "",
                        "title" => "10 years of service on local Financial Planning Association (FPA) chapter board in a variety of positions."
                    ],
                ]
            ], // END PAT
            [
                'name' => 'Neil R. Waxman',
                'slug' => 'neil-waxman',
                'image' => '/images/neil-waxman.jpg',
                'candid_image' => '/images/neil-waxman-candid.jpg',
                'large_image' => '/images/neil-waxman-hero.jpg',
                'job_titles' => ["CFP<sup>&reg;</sup> | Managing Director"],
                'focus' => ['Wealth management ','business succession planning and corporate transaction strategies '],
                'content' => '
                    <div class="content-block">
                        <h5> <em>"Clear thinking that comes from experience."</em> </h5>
                        <p> With over 30 years of experience as an advisor, coordinator, and facilitator for high net worth families and their companies, Neil has an uncanny ability to navigate through both the social and financial aspects of a client\'s life in a way that provides clarity and vision. As Capital Advisor\'s Managing Director, Neil uses this experience to help clients quickly and intelligently take action, which is a reason he is often sought out by the <a href="' . route("category.list", "news-awards") . '">national media</a> for comment and opinion. </p>
                    </div>
                    <div class="content-block">
                        <h5> <em>"This isn\'t just numbers and taxes."</em> </h5>
                        <p> A master mediator, Neil is known in the industry for providing clear thinking that cuts through the clutter. He equips his clients with straightforward advice while also counseling them through tough decisions. Ultimately, he makes sure that his clients understand the "why" behind every decision that impacts their financial future. </p>
                    </div>
                    <div class="content-block">
                        <h5> <em>"You have to muscle forward."</em> </h5>
                        <p> As a former wrestler, Neil remains actively involved in the sport, serving as a coach and mentor for young athletes while promoting and advocating for the sport locally and nationally. He was involved in the formative development of the Cleveland Chapter of Wrestlers in Business Network, because of the life-long skills wrestling helps build, like being persistent, working smart, staying diligent and muscling forward. In addition to wrestling, Neil is actively involved in the community, serving on the boards of 7 non-profits and 5 regional businesses. </p>
                    </div>
                    <div class="content-block">
                        <h5>Board Memberships</h5>
                        <ul>
                            <li>Interlake Industries, Inc.</li>
                            <li>Hitchcock, Fleming & Associates, Inc.</li>
                            <li>Monarch Teaching Technologies, Inc.</li>
                            <li>Signet Enterprises</li>
                            <li>UnderCar Express, LLC</li>
                            <li>Cascade Capital Corporation</li>
                            <li>Jewish Federation of Cleveland</li>
                            <li>Cleveland Hebrew Schools Education Foundation</li>
                            <li>Wrestlers in Business Network – Cleveland Chapter</li>
                            <li>Jewish Education Center of Cleveland</li>
                            <li>Honorary Life Trustee, The Joseph and Florence Mandel Jewish Day School</li>
                            <li>University School Planned Giving Advisory Committee</li>
                            <li>Director Emeritus, Society of Financial Service Professionals</li>
                        </ul>
                    </div>',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup> : Certified Financial Planner',
                    ],
                    [
                        'link' => '',
                        'title' => 'AEP<sup>&reg;</sup> : Accredited Estate Planner',
                    ],
                    [
                        'link' => '',
                        'title' => 'Worth magazine annual list of America\'s Top Wealth Advisors – 6 consecutive years',
                    ],
                    [
                        'link' => '',
                        'title' => 'Financial Service Professional of the Year – Cleveland Chapter of the Society for Financial Service Professionals –2012',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'Member, Society of Financial Professionals',
                    ],
                    [
                        'link' => '',
                        'title' => 'Associate Editor: Journal of Financial Service Professionals',
                    ],
                    [
                        'link' => '',
                        'title' => 'Member: Board of Directors, Director Emeritus, Cleveland Society of Financial Service Professionals',
                    ],
                    [
                        'link' => '',
                        'title' => 'Estate Planning Council of Cleveland',
                    ],
                    [
                        'link' => '',
                        'title' => 'National Association of Estate Planners & Councils',
                    ],
                    [
                        'link' => '',
                        'title' => 'Financial Planning Association (FPA<sup>&reg;</sup>)',
                    ],
                ]
            ], // END NEIL
            [
                'name' => 'Zachary Abrams',
                'slug' => 'zachary-abrams',
                'image' => '/images/zach-abrams.jpg',
                'candid_image' => '/images/zach-abrams-candid.jpg',
                'large_image' => '/images/zach-abrams-hero.jpg',
                'job_titles' => ['CFP<sup>&reg;</sup> | Manager, Wealth Management',' & Portfolio Analysis'],
                'focus' => ["Wealth, portfolio and risk management strategies", "Market, economic, product and investment research & Financial model development to deliver client solutions and enhance advisor-client relationship"],
                'content' => '
                    <div class="content-block"><h5>"We\'re solving a puzzle."</h5>
                        <p>Zach joined Capital Advisors\' professional staff more than 10 years ago after graduating from The Ohio State
                            University – and he immediately saw the power in using technology, coupled with research, to develop
                            personalized
                            cash flow models. Using this approach, he\'s become an expert at intelligently piecing together an investment
                            strategy that fits within a client\'s overall objectives while being mindful of risk exposures and market
                            opportunities.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Question wisely."</h5>
                        <p>Zach\'s desire to find a solution to any problem serves his clients well. He\'s known for his quick turnaround with
                            answers, willingness to question everything – and his ability to research those questions until he arrives at a
                            solid answer. He\'s fascinated with the investment landscape and tackles research full force so that his clients
                            can
                            make more informed decisions.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Don\'t wait for things to come to you."</h5>
                        <p>Zach\'s extensive analytical research on markets, the global economy, new investment products, and current estate
                            and
                            tax law isn\'t just a professional interest – it also helps him see trends before they happen. His passion for
                            knowledge also goes beyond market-related issues – name a topic, and Zach\'s probably researched it. From
                            geopolitics
                            to sports to history to the way the universe works, Zach thoroughly enjoys knowing and learning all he can.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'FINRA Series 7, FINRA Series 4 and FINRA Series 65 Registrations',
                    ],
                    [
                        'link' => '',
                        'title' => 'BS in finance from The Ohio State University',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'YACG Board Member',
                    ],
                    [
                        'link' => '',
                        'title' => 'Jewish Federation of Cleveland Advisor Study Group',
                    ],
                    [
                        'link' => '',
                        'title' => 'Cleveland Young Buckeyes Treasurer',
                    ],
                    [
                        'link' => '',
                        'title' => 'Breakthrough Schools',
                    ],
                ]
            ], // END ZACHARY
            [
                'name' => 'Rob Holub',
                'slug' => 'rob-holub',
                'image' => '/images/rob-holub.jpg',
                'candid_image' => '/images/rob-holub-candid.jpg',
                'large_image' => '/images/rob-holub-hero.jpg',
                'job_titles' => ['CFA, CFP<sup>&reg;</sup> | Chief Investment Strategist'],
                'focus' => [],
                'content' => '
                    <div class="content-block">
                        <h5>"We\'re not just picking winners."</h5>
                        <p>
                            Numbers and statistics are Rob\'s business. He funnels through the thousands of financial products in the
                            marketplace, analyzing the information in a way that\'s personal for Capital Advisors\' clients. From looking at
                            the
                            short- and long-term data to meeting with fund managers, his insight helps the firm narrow in on the right
                            products
                            for client portfolios.
                        </p>
                    </div>
                    <div class="content-block">
                        <h5>"We have to filter the noise."</h5>
                        <p>
                            "Educate and educate some more," is Rob\'s go-to motto when helping clients gain confidence in their decisions.
                            He
                            strives to provide all the knowledge he can about a recommendation, especially the "what" and the "why" behind
                            an
                            investment.
                        </p>
                    </div>
                    <div class="content-block">
                        <h5>"There\'s an art to the game."</h5>
                        <p>
                            Rob is a born and breed Clevelander with a true love for the city he calls home. As an Indian\'s season ticket
                            holder, he appreciates not only the sights and sounds of the game – but also the analytics behind it; how a team
                            with limited financial resources can successfully deliver a winning season. The underdog story is one he loves
                            to
                            tell.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '#',
                        'title' => 'CFA',
                    ],
                    [
                        'link' => '#',
                        'title' => 'CFP<sup>&reg;</sup>',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '#',
                        'title' => 'Member, CFA Society Cleveland',
                    ],
                ]
            ], // END ROB
            [
                'name' => 'Doug Price',
                'slug' => 'doug-price',
                'image' => '/images/doug-price.jpg',
                'candid_image' => '/images/doug-price-candid.jpg',
                'large_image' => '/images/doug-price-hero.jpg',
                'job_titles' => ['CFP<sup>&reg;</sup> | Senior Manager'],
                'focus' => ["Assisting doctors, business owners and retirees with financial, investment, and estate planning issues"],
                'content' => '
                    <div class="content-block"><h5>"Follow up on what you promise."</h5>
                        <p>
                            With over 20 years of banking, insurance, trust, investment and financial planning experience, Doug knows the
                            importance communication plays in the financial services industry. His clients value his quick follow through
                            and
                            the open line of communication he fosters. Before joining Capital Advisors, Ltd in 2008, Doug served as Vice
                            President in Private Client Services at a regional Cleveland bank where he primarily managed relationships for
                            investment management and trust clients.</p>
                    </div>
                    
                    <div class="content-block"><h5>"We see things our clients don\'t."</h5>
                        <p>
                            At Capital Advisors, Ltd. Doug\'s known for his proactive approach to managing a client\'s business, coupled with
                            his
                            compassion for helping clients navigate financial decisions that are sometimes emotional ones. He sees himself
                            as an
                            advocate for the client, diving deep into their situation to uncover and clearly explain the opportunities or
                            risks
                            the client might not realize.</p>
                    </div>
                    
                    <div class="content-block">
                        <h5>"Make the overwhelming feel simple."</h5>
                        <p>
                            Doug was drawn to the financial field at an early age. After his father passed away from complications related
                            to
                            Multiple Sclerosis (MS), Doug experienced first-hand the need for straightforward, smart financial planning.
                            Doug
                            uses these skills not only for the benefit of his clients but also as an Emeritus Board Member, and former
                            Chairman,
                            for the Ohio Buckeye Chapter of the National MS Society. During his tenure as Chair, he helped the organization
                            significantly reduce their deficit while raising over $4 million a year for research.</p>
                    </div>',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'FINRA Series 66 Registrations and insurance license',
                    ],
                    [
                        'link' => '',
                        'title' => 'BA in economics from Denison University',
                    ],
                    [
                        'link' => '',
                        'title' => 'MA in economics from Case Western Reserve University',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'Estate Planning Council of Cleveland',
                    ],
                    [
                        'link' => '',
                        'title' => 'Society of Financial Service Professionals',
                    ],
                    [
                        'link' => '',
                        'title' => 'Diamond Advisory Group, University Hospitals',
                    ],
                    [
                        'link' => '',
                        'title' => 'Estate Planning Advisory Council, CWRU',
                    ],
                ]
            ], // END DOUG
            [
                'name' => 'Melissa Costello',
                'slug' => 'melissa-costello',
                'image' => '/images/melissa-costello.jpg',
                'candid_image' => '/images/melissa-costello-candid.jpg',
                'large_image' => '/images/melissa-costello-hero.jpg',
                'job_titles' => ['CFP<sup>&reg;</sup> | Financial Analyst', 'Director of Compliance'],
                'focus' => [],
                'content' => '
                    <div class="content-block"><h5>"There\'s a story behind every account."</h5>
                        <p>Ask Melissa what she likes most about her work at Capital Advisors, and her clients rise to the top of the list.
                            She enjoys getting to know her clients personally – where they came from and where they want 
                            to go – so she can make knowledgeable financial, investment and estate planning recommendations. In 
                            addition to her client-facing responsibilities, including billing, she\'s also the lead on 
                            compliance-related issues, assuring the firm is ahead of changing SEC regulations, policies 
                            and procedures.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Don\'t check it every day."</h5>
                        <p>With more than 15 years of experience in the financial services industry, Melissa knows that it\'s hard not to
                            worry when the market has a bad day. As the wife of a police officer, she also knows that 
                            patience and optimism are critical survival tools. She\'s a pro at staying calm through any 
                            storm and helping her clients do the same – planning wisely for the long-term, so there\'s 
                            more confidence through any change.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Burn off some energy."</h5>
                        <p>Melissa is an outdoor enthusiast and shares this love with her friends and family, especially her three kids.
                            Whether at the park or playground, Melissa gets reenergized by her time outside. She also lends a hand whenever
                            it\'s needed within her husband\'s police department – organizing and supporting fundraisers, 
                            including Cookies for a Cop.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'FINRA Series 7 & FINRA Series 24 Registrations',
                    ],
                ],
                'affiliations' => []
            ], // END MELISSA
            [
                'name' => 'Mary Kozar',
                'slug' => 'mary-kozar',
                'image' => '/images/mary-kozar.jpg',
                'candid_image' => '/images/mary-kozar-candid.jpg',
                'large_image' => '/images/mary-kozar-hero.jpg',
                'job_titles' => ['CFP<sup>&reg;</sup> | Senior Analyst'],
                'focus' => [],
                'content' => '
                    <div class="content-block"><h5>"I\'ve got this."</h5>
                        <p>For 26 years, Mary\'s called Capital Advisors home – and her experience runs deep. She wears many hats at the
                            firm, including serving as the head of HR as well as the point person for insurance new business processing and
                            servicing. As a senior analyst, her main responsibility is her clients: getting to know their point-of-view so
                            she can offer sound advice on investments and estate planning.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Ignore the hype."</h5>
                        <p>Whether it\'s the pressure of the deadline – or the latest trend in the market – Mary thrives on the pace of the
                            industry. She tackles the pressure with a philosophy that\'s part of life at Capital Advisors: plan for the
                            long-term and ignore news media hype. She\'s a pro at keeping emotions in-check when it comes to investing – so
                            logical decisions rise to the surface.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Just look outside."</h5>
                        <p>Mary isn\'t afraid to change course when needed, and it\'s a skill she\'s perfected both in and out of the office.
                            Whether she\'s kayaking with her family, exploring a National Park in the off-season – or weighing the merits of
                            an investment – she looks at a challenge from all angles.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup> Professional',
                    ],
                    [
                        'link' => '',
                        'title' => 'Securities licensed',
                    ],
                    [
                        'link' => '',
                        'title' => 'Life insurance licensed in Ohio',
                    ],
                    [
                        'link' => '',
                        'title' => 'Notary Public',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'FPA Northeaast Ohio',
                    ],
                    [
                        'link' => '',
                        'title' => 'Cleveland Society of Financial Service Professionals (CSFSP)',
                    ],
                ]
            ], // END MARY
            [
                'name' => 'Daniel O\'Brien',
                'slug' => 'daniel-o-brien',
                'image' => '/images/daniel-obrien.jpg',
                'candid_image' => '/images/daniel-obrien-candid.jpg',
                'large_image' => '/images/daniel-obrien-hero.jpg',
                'job_titles' => ['MBA, CFP<sup>&reg;</sup> | Financial Analyst'],
                'focus' => [],
                'content' => '
                    <div class="content-block">
                        <h5>"We simplify the complex."</h5>
                        <p>
                            Dan\'s passion for investing is matched by his ability to translate complex financial concepts into
                            understandable
                            talking points for his clients. Dan believes in evaluating risk from all angles and considering the potential
                            "what
                            if" scenarios that may arise. At Capital Advisors, he puts this disciplined approach to work as part of the
                            firm\'s
                            research team, developing innovative market strategies for clients.</p>
                    </div>
                    
                    <div class="content-block"><h5>"Meticulous preparation is key."</h5>
                        <p>
                            Dan is known for his attention to detail, including his ability to make data tangible. He spends a great deal of
                            his
                            time upfront assuring he has the right mix of products to create a solid portfolio. Then he uses this
                            information to
                            educate clients on their financial plan, so they can make strategic decisions that align with targeted financial
                            goals.</p>
                    </div>
                    
                    <div class="content-block"><h5>"Catching the right wave."</h5>
                        <p>
                            People are often surprised to learn that Dan is an avid surfer – on Lake Erie. Timing, preparation and focus are
                            essential parts of the sport, and that\'s especially true among the less-than-forgiving waters of Ohio\'s Great
                            Lake.</p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'CFP<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'MBA – Loyal University Chicago',
                    ],
                    [
                        'link' => '',
                        'title' => 'FINRA Series 7 Registrations',
                    ],
                    [
                        'link' => '',
                        'title' => 'Insurance License',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'Financial Planning Association <sup>&reg;</sup> (FPA<sup>&reg;</sup>)',
                    ],
                    [
                        'link' => '',
                        'title' => 'Loyola Club',
                    ],
                ]
            ], // END DANIEL
            [
                'name' => 'Sandi Andrews',
                'slug' => 'sandi-andrews',
                'image' => '/images/sandi-andrew.jpg',
                'candid_image' => '/images/sandi-andrew-candid.jpg',
                'large_image' => '/images/sandi-andrew-hero.jpg',
                'job_titles' => ['APMA<sup>&reg;</sup>, CMFC<sup>&reg;</sup> | Assistant Analyst', 'Administrator'],
                'focus' => [],
                'content' => '
                    <div class="content-block"><h5>"Problem-solving means taking the reigns."</h5>
                        <p>Account reconciliation, statements, report analytics and more. Sandi makes sure that every task that requires
                            checking is on time, accurate and in the client\'s hands. She\'s a master at collaborating to get the job done,
                            including assisting Capital Advisor\'s analysts in reviewing investment updates and writing fund reports, as well
                            as
                            tackling trades behind-the-scenes.
                        </p>
                    </div>
                    <div class="content-block"><h5>"Learning is a constant."</h5>
                        <p>After more than 16 years at Capital Advisors, Sandi has seen tremendous change in the marketplace – but one thing
                            has remained constant: her company\'s desire to help associates grow. She started as a receptionist, and quickly
                            began taking on more complex tasks while also working to earn her financial designations. In her current role,
                            she
                            enjoys going behind the cut-and-dry answers to make sure the client\'s needs are fully addressed.
                        </p>
                    </div>
                    <div class="content-block"><h5>"You have to run a tight ship."</h5>
                        <p>As the mom of five boys – including a Marine – Sandi knows the power of organization. Whether she\'s helping her
                            school-aged sons juggle sports, completing coursework or getting a client what they need, Sandi approaches life
                            and
                            work with not only a disciplined eye, but also a creative point-of-view.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '',
                        'title' => 'APMA<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'CMFC<sup>&reg;</sup>',
                    ],
                    [
                        'link' => '',
                        'title' => 'FINRA Series 6 Registrations',
                    ],
                ],
                'affiliations' => []
            ], // END SANDI
            [
                'name' => 'Susie Chase',
                'slug' => 'susie-chase',
                'image' => '/images/susie-chase.jpg',
                'candid_image' => '/images/susie-chase-candid.jpg',
                'large_image' => '/images/susie-chase-hero.jpg',
                'job_titles' => ['Investment Administrator'],
                'focus' => [],
                'content' => '
                     <div class="content-block"><h5>"No drama."</h5>
                        <p>At Capital Advisors, Susie\'s responsible for a host of critical administrative tasks, including account
                            maintenance
                            and reconciliation, investment reporting and assisting with trades. With so many items on her to-do list, she\'s
                            known throughout the firm for her calm-under-pressure approach to business.
                        </p>
                    </div>
                    <div class="content-block"><h5>"We\'re in the \'attention-to-detail\' business."</h5>
                        <p>Have a request? Susie\'s on it. She knows that time is of the essence when it comes to everything she handles for
                            Capital Advisors – from answering questions to handling trades to responding to an email. After nearly 20 years
                            with
                            the firm, she\'s built a reputation for exceeding expectations and tackling the most urgent requests, quickly and
                            efficiently.
                        </p>
                    </div>
                    <div class="content-block"><h5>"There\'s peace on the water."</h5>
                        <p>Whether she\'s boating in the summer or skiing in the winter, Susie finds that time outside puts everything into
                            perspective and gives her the traveling adventure she craves. She\'s also a fan of culinary adventure – and
                            spends
                            one or two evenings a week exploring up-and-coming restaurants throughout Cleveland.
                        </p>
                    </div>
                ',
                'certifications' => [
                    [
                        'link' => '#',
                        'title' => 'TBD',
                    ],
                ],
                'affiliations' => [
                    [
                        'link' => '#',
                        'title' => 'TBD',
                    ],
                ]
            ], // END SUSIE
            [
                'name' => 'Candice Smith',
                'slug' => 'candice-smith',
                'image' => '/images/candice-smith.jpg',
                'candid_image' => '/images/candice-smith-candid.jpg',
                'large_image' => '/images/candice-smith-hero.jpg',
                'job_titles' => ['Investment Administrator'],
                'focus' => ['Administrative and operations'],
                'content' => '
                    <div class="content-block">
                        <h5><em>"We\'re all in this together."</em></h5>
                        <p>
                            Candice\'s philosophy is a simple one: in order to properly service the firm\'s clients and build relationships, 
                            everyone needs to pitch in and work as a team. As one of three admins for the firm, she\'s responsible for processing account paperwork and monthly reconciliation, 
                            as well as working closely with the firm\'s analysts to deliver against any client need.
                        </p>
                    </div>
                    <div class="content-block">
                        <h5><em>"I\'m used to chaos."</em></h5>
                        <p>
                            A New York city native, Candice uses a "never let them see you sweat" attitude to manage deadlines and get the job done. 
                            She\'s also a pro at asking the right questions. Outside of the office, she puts these skills to use cooking and baking, two of her passions.
                        </p>
                    </div>
                    <div class="content-block">
                        <h5><em>"Write it down."</em></h5>
                        <p>
                            From getting coffee to answering the phones, Candice is often the first face clients see. She has over 15 years of experience on the administrative and operations side of the 
                            business, and is known as a quick learner and meticulous note taker. If someone doesn\'t know the answer, Candice likely has it written down.
                        </p>
                    </div>
                ',
                'affiliations' => [
                    [
                        'link' => '',
                        'title' => 'Girl Scouts of Northeast Ohio ',
                    ],
                ]
            ], // END CANDICE
        ]);
    }
}
