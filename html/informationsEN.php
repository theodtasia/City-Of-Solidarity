<?php session_start();
	$_SESSION["changeLang"] = 'informationsGR.php';
	$_SESSION["pageTitle"] = 'Informations';
	$_SESSION["lang"] = 'en';

	require('headerEN.php');?>
<div class="text-style">
    <article class="article-content">
        <section class="section-1">

            <div class="container text-center">
                <h1 class="mt-4">The problem of poverty in our country...</h1>
            </div>


            <div class="container" style="margin-top: 100px">
                <!--General text-->
                <p class="text-justify">
                    In this team effort, to reduce the rates of poverty in our country, as well as its serious effects
                    on our
                    society, it is necessary to be fully aware of the real situation. Only in this way will we be able
                    to prioritize
                    our struggle to combat this phenomenon, which also affects our city. Following, there is a
                    presentation of data
                    on the state of poverty in our country, which have been recorded since the beginning of the economic
                    crisis. The
                    following data comes from the Income Research and Living Conditions of the Houses of the Hellenic
                    Statistical
                    Authority (ELSTAT) published in 2020, while including measurements for the previous 12 years.
                    <br><br>
                    <img src="../img/wallet.gif" class="img-fluid"
                        alt="empty wallet" style="width:450px">
                    <br>
                </p>
                <p class="text-justify">
                    In order to understand the presentation, it is necessary to first mention the used terms:
                    <ul>
                        <li><strong>Poverty risk</strong>: the percentage of people living in households whose total
                            equivalent
                            disposable income is less than 60% of the national average equivalent disposable income is
                            defined.
                            According to this definition, the "poverty risk threshold" is created, which changes
                            dynamically depending
                            on the annual economic conditions of the country.</li>
                        <li><strong> Poor population </strong>: A population with an income lower than or equal to the
                            poverty line.
                        </li>
                        <li> <strong> Non-Poor Population </strong>: Population with an income higher than the poverty
                            line. </li>

                        <li><strong>Material deprivation</strong>: the percentage of people who face serious financial
                            difficulties is
                            defined as a result of which at least four basic goods and services are deprived of the
                            total of nine:
                            <ol>
                                <li> Difficulties in responding to the payment of fixed accounts such as rent or loan
                                    installment, fixed
                                    accounts (electricity, water, natural gas, etc.), credit card installments or loan
                                    installments for
                                    household items, holidays, etc., or purchases with installments of main residence
                                </li>
                                <li> Financial inability to pay for a week off </li>
                                <li> Financial incapacity for diet that includes every second day chicken, meat, fish or
                                    vegetables of
                                    equal nutritional value </li>
                                <li> Financial inability to deal with extraordinary but necessary expenses worth about
                                    375 euros </li>
                                <li> Financial inability to have a phone (mobile phone included) </li>
                                <li> Financial inability to have color TV </li>
                                <li> Financial inability to have a washing machine </li>
                                <li> Financial inability to have a private car and
                                <li> Economic weakness for adequate heating. </li>
                            </ol>
                        </li>
                    </ul>
                </p>
                <p class="text-justify">

                    The first graph shows the change in the price of the poverty line from 2011 until today. The amount
                    of money is
                    in unit € and concerns annual household income with two adults and two dependent members (children)
                    under 14
                    years of age. This chart shows that in times of economic crisis, the average family is called upon
                    to live on a
                    fairly low income.
                </p>
                <!--katofliFtoxeiaschart-->
                <canvas id="katofliFtoxeiasEN"></canvas>
                <script src="/js/charts/katofliFtoxeiasEN.js"></script>
                <br>
                <p class="text-justify">

                    The following is a presentation of the data on the percentage of our fellow citizens living on the
                    brink of
                    poverty in the last decade.</p>
                <!--kindinosFtoxeiaschart-->
                <canvas id="kindinosFtoxeiasEN"></canvas>
                <script src="/js/charts/kindinosFtoxeiasEN.js"></script>
                <br>
                <p class="text-justify">
                    The statistical survey for the year 2019 showed that 16.2% of the general population of our country
                    has material
                    deprivation. This percentage reflects both the poor and the non-poor. Therefore, both percentages
                    face
                    difficulties in their survival. But at this point, we need to take a closer look at the needs that
                    most concern
                    families. The following bar chart includes the percentages of households of the poor population that
                    are unable
                    to meet certain needs, as well as those needs.
                </p>
                <canvas id="vasikesAnagkesEN"></canvas>
                <script src="/js/charts/vasikesAnagkesEN.js"></script>

                <p class="text-justify" style="margin-top: 50px">
                    Of course, there are other difficulties that greek households face in large percentages, such as the
                    inability
                    to cover personal expenses (eg a hobby) or participation in leisure activities (eg a meeting with
                    friends /
                    relatives for food). or drink), or even inability to connect to the internet.</p>
			
			    
                <p class="text-justify" style="margin-top: 50px"><a href="loginEN.php">Register to our network</a> and offer to your fellow
                    citizens
                    whatever they need. Let's all think of our fellow human beings who need us, putting ourselves in
                    their shoes!
                </p> <br>
                <p class="text-justify">
                    <small>Source: Research <a href="https://www.statistics.gr/en/statistics/-/publication/SFA10/2019"
                            target="_blank">
                            "Household Income and Living Conditions (SILC) / 2019 "</a>,Hellenic Statistical Authority
                        (ELSTAT) </small><br><small>Note: The results of the 2020 survey, with an income reporting
                        period in 2019,
                       will be announced in June 2021. </small>
                </p>
        </section>
    </article>
	</div>
    <?php require('footerEN.php');?>