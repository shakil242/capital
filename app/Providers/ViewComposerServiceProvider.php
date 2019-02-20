<?php

namespace App\Providers;

use FourtyTwoConnect\Coral\Models\Blog\Post;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $questions = [
            [
                'question' => 'What services are provided?',
                'answer' => 'Many firms call their services wealth management but really only provide investment management with some window dressing. 
                That may be what you seek. But if what you require is wealth management defined as integrated financial planning, of which investment planning is just one important component, 
                you will want to dive deeper. Wealth management should also include retirement, estate, income tax, corporate executive, 
                business succession, and insurance/risk management planning. If these are services you require, be sure your advisor has the professional skills and experience to provide them.'
            ],
            [
                'question' => 'How are those services administered?',
                'answer' => 'Ask to see sample output such as sample investment update reports and cash flow pro forma 
                hat are critical to making investment, retirement, estate, and tax planning decisions. Ask about the 
                frequency of reporting and contact. Additionally, ask who will be on your service team, so you are 
                assured that you can always speak to professional staff members who are intimately familiar with your 
                affairs.'
            ],
            [
                'question' => 'Will the Investment Planning and Reporting consider assets not held (custodied) or directly managed by the firm? ',
                'answer' => 'Do they consider and report on investment assets, which are held or managed by other firms 
                – for instance in your retirement plan? In order to properly allocate a client’s portfolio for optimum 
                outcomes, all assets must be considered as a whole.'
            ],
            [
                'question' => 'Does the firm have competing corporate ties to financial institutions, investment managers or investment banks?',
                'answer' => 'Be clear whether the firm has such proprietary relationships with financial institutions, 
                as these can create conflicts of interest. Make sure all of these partnerships are disclosed, and that 
                you understand all the ways they could affect your relationship.'
            ],
            [
                'question' => 'What do the services cost and how do you pay for them?',
                'answer' => 'Do you pay one fee for everything, or is it a la carte? Does the firm receive compensation 
                from any other financial institutions for services they provide to you? Do they disclose any and all of 
                these fees? All fees should be spelled out, as well as how you will pay the firm for their services. 
                You should pay for your services directly and transparently. '
            ],
            [
                'question' => 'To which regulatory body is the firm accountable? ',
                'answer' => 'Wealth management firms that provide investment advice are either regulated by the U.S. 
                    Securities and Exchange Commission (SEC) or the Financial Industry Regulatory Association (FINRA) 
                    or both. Advisors who are Registered Investment Advisors (RIAs) are regulated by the SEC and are 
                    held to a fiduciary standard. Advisors who are Registered Representatives (RRs) are regulated by 
                    FINRA and are governed by the suitability rule. These advisors are commonly members of large 
                    brokerage firms, insurance companies, banks and other large financial institutions. Suitability 
                    requires only that an investment be appropriate based on the investor’s profile. For RIAs, 
                    fiduciary standard carries with it the most stringent industry requirements, both ethically and legally. 
                    For example, the suitability rule would not prohibit a FINRA regulated RR from selling an investment, 
                    which would garner higher fees as long as it is suitable for that client’s profile. 
                    An RIA governed by the fiduciary standard would be strictly prohibited from doing so. SEC regulated 
                    advisors are required to file a Form ADV every year, which provides very detailed information about 
                    the firm and all of its members. It also allows the prospective client to see if the firm’s client 
                    profile resembles their circumstances. You can find these firm\'s ADVs 
                    <a href="https://adviserinfo.sec.gov" style="text-decoration: underline;"><strong>here</strong></a>. FINRA regulated advisors, because 
                    they are Registered Representatives, can only be searched individually. Those searches are much less 
                    disclosive and mainly detail the individual’s licenses and if they have any industry violations. 
                    This information can be found <a href="http://brokercheck.finra.org/Search/Search" style="text-decoration: underline;"><strong>here.</strong></a>'
            ],
            [
                'question' => 'Who is the firm’s Custodian and/or Broker Dealer?',
                'answer' => 'All investment advisors have a custodial firm, who handles trades, holds securities, 
                collects dividends, produces statements and tax information, issues checks and the like. Bernie Madoff’s 
                custodian was owned by him; thus, there were no checks and balances. Make sure you choose a firm with an 
                independent and very financially sound custodian. Broker Dealers provide Independent Registered 
                Representatives with varying levels of support, execution and compliance. Advisors using a broker dealer 
                either do business under their own firm name or that of the mothership – LPL for instance. As with 
                custodians, make sure that the Broker Dealer is financially sound with a history of industry compliance.'
            ],
            [
                'question' => 'What credentials do the firm members possess?',
                'answer' => 'Quality firms should be staffed by professionals with industry credentials including but 
                not limited to CERTIFIED FINANCIAL PLANNER (CFP&reg;), Chartered Financial Analyst (CFA&reg;), Personal 
                Financial Specialist (PFS), Certified Public Accountant (CPA), Masters in Business Administration (MBA), 
                Accredited Portfolio Management Advisor (APMA&reg;), Accredited Estate Planner (AEP&reg;), Chartered 
                Mutual Fund Advisor (CMFA&reg;), Accredited Wealth Management Advisor (AWMA&reg;), and Accredited 
                Investment Fiduciary (AIF&reg;).'
            ],
            [
                'question' => 'How many years of experience does the team possess and what is the average tenure of the firm’s members?',
                'answer' => 'A greater numbers of years of experience is important, but equally — if not more important — is turnover. 
                An advisory relationship is very personal. Maintaining continuity of relationships is critical to 
                successful long-term relationships.'
            ],
            [
                'question' => 'Has the firm or any of its members ever been reprimanded or sanctioned by any financial
                 regulatory body including but not limited to the SEC, FINRA, CFP Board, AICPA, and the CFA Institute? ',
                'answer' => 'Of course this is important to know, and you can find this by searching the links above
                 for SEC or FINRA regulated advisors.'
            ]
        ];

        // Using Closure based composers...
        view()->composer('pages.html.news', function ($view) use ($questions) {
            $view->with('latestpost', Post::notNews()->published()->latest()->first());
            $view->with('latestnews', Post::news()->published()->latest()->first());
            $view->with('questions', array_slice($questions, 0, 3));
        });

        view()->composer('pages.faq', function ($view) use ($questions) {
            $view->with('questions', $questions);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}