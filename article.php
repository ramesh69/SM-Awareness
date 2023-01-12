<?php

    $result = $_GET['result'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Article
    </title>

    <style>
        :root {
            --surface-color: #fff;
            --curve: 40;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Noto Sans JP', sans-serif;
            background-color: #fef8f8;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 4rem 5vw;
            padding: 0;
            list-style-type: none;
        }

        .card {
            position: relative;
            display: block;
            height: 100%;
            border-radius: calc(var(--curve) * 1px);
            overflow: hidden;
            text-decoration: none;
        }

        .card__image {
            width: 100%;
            height: 400px;
        }

        .card__overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
            border-radius: calc(var(--curve) * 1px);
            background-color: var(--surface-color);
            transform: translateY(100%);
            transition: .2s ease-in-out;
        }

        .card:hover .card__overlay {
            transform: translateY(0);
        }

        .card__header {
            position: relative;
            display: flex;
            align-items: center;
            gap: 2em;
            padding: 2em;
            border-radius: calc(var(--curve) * 1px) 0 0 0;
            background-color: var(--surface-color);
            transform: translateY(-100%);
            transition: .2s ease-in-out;
        }

        .card__arc {
            width: 80px;
            height: 80px;
            position: absolute;
            bottom: 100%;
            right: 0;
            z-index: 1;
        }

        .card__arc path {
            fill: var(--surface-color);
            d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
        }

        .card:hover .card__header {
            transform: translateY(0);
        }

        .card__thumb {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .card__title {
            font-size: 1em;
            margin: 0 0 .3em;
            color: #000;
        }

        .card__tagline {
            display: block;
            margin: 1em 0;
            font-family: "MockFlowFont";
            font-size: .8em;
            color: #D7BDCA;
        }

        .card__status {
            font-size: .8em;
            color: #D7BDCA;
        }

        .card__description {
            padding: 0 2em 2em;
            margin: 0;
            color: #D7BDCA;
            font-family: "MockFlowFont";
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            overflow: hidden;
        }
        .wrapper {
            width: 100%;
            min-height: 100vh;
            /* background-image: url("assets/images/bg_0.png"); */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            overflow: hidden;
        }
    </style>


</head>

<body class="bg" style="background-color: #87D4E6">

        <div style="margin: 30px 30px 30px 30px;">
            <a href="https://nuptial-acre.000webhostapp.com/quiz.php">
                <img src="https://static.thenounproject.com/png/251451-200.png" alt="" style="width: 50px;">
            </a>
        </div>

        

    <div class="wrapper">
        <div style="text-align: center;">
            <h2>Your score is <?php echo $result; ?> our of 10 Question. Better Read Our Suggestion Articles!!</h2>
        </div>
    <ul class="cards">
        <?php if($result < 5) { ?>
        <li>
            <a href="https://www.geeksforgeeks.org/privacy-and-security-in-online-social-media/amp/" target="_blank" class="card">
                <img src="https://www.blog.consultants500.com/wp-content/uploads/2020/05/Manage-Privacy.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Privacy and Security in online social media</h3>
                            
                            <p>Social media is not a new term for us. Our daily life is incomplete, or we can say we human beings ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="https://defendingdigital.com/security-tips-for-social-media-safety/" target="_blank" class="card">
                <img src="https://defendingdigital.com/wp-content/uploads/2019/02/social-media-app-icons.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Social Media Safety, Security, And Privacy Tips</h3>
                            
                            <p>Have you used a social media site or app today? Facebook, Instagram, Twitter, Pinterest,  ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="https://sentione.com/blog/key-questions-on-social-media-data-access-and-privacy-concerns" target="_blank" class="card">
                <img src="https://sentione.com/wp-content/uploads/2019/10/en-meta-image-1200x630-facebook@1x.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Social media data access & privacy concerns</h3>
                            
                            <p>Let’s answer the top 5 most commonly asked questions about Facebook and Instagram data.  ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="https://www.aura.com/learn/social-media-privacy-risks" target="_blank" class="card">
                <img src="https://assets-global.website-files.com/6082ee0e95eb6459d78fac06/6384cd0af721d558a5a16f8a_Social-media-privacy-risks-header.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Social Media Privacy Risks</h3>
                            
                            <p>Social media privacy refers to the personal and sensitive information that people can   ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="https://digitalmarketinginstitute.com/blog/social-media-privacy-guide" target="_blank" class="card">
                <img src="https://mydmi.imgix.net/Social_Media__Privacy_header.png?crop=faces%2Ccenter&fit=crop&ixlib=php-3.3.1&w=600&s=4d0f332f17368573d8742f202652432e" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">A Guide to Social Media and Privacy</h3>
                            
                            <p>Social media privacy refers to the personal and sensitive information that people can   ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="https://dataprivacymanager.net/how-to-protect-your-privacy-on-social-media/" target="_blank" class="card">
                <img src="https://dataprivacymanager.net/wp-content/uploads/2020/07/How-to-Protect-Your-Privacy-on-Social-Media-1024x536.png" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">How to Protect Your Privacy on Social Media?</h3>
                            
                            <p>Lately, privacy concerns have increasingly gained a broader public and political debate. This is partly because of social media and the internet   ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>

        <?php } else { ?>
            <li>
                <a href="https://www.mcafee.com/blogs/privacy-identity-protection/privacy-awareness-week-2019/" target="_blank" class="card">
                    <img src="https://securethoughts.com/wp-content/uploads/2017/12/780x380_online-security.jpeg" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <div class="card__header-text">
                                <h3 class="card__title">Protect Your Online Privacy</h3>
                                <p>If you haven’t given your online privacy much attention lately then things need to change. In our era of weekly  ...... Read More</p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://riiroo.com/blogs/health-and-wellbeing/what-is-the-impact-of-social-media-on-privacy" target="_blank" class="card">
                    <img src="https://cdn.shopify.com/s/files/1/1900/2575/files/a_kid_doing_some_programming_on_computer_480x480.jpg?v=1651668394" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <div class="card__header-text">
                                <h3 class="card__title">What is The Impact of Social Media on Privacy?</h3>
                                <p>As social media has become more popular, people have become increasingly worried about the privacy implications of using these platforms.  ...... Read More</p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="https://www.sciencedirect.com/science/article/pii/S1877050916000211" target="_blank" class="card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeGGhm5reMhRUTLnqU-qpOpukB1RWVU1hzZk5DdNtZOUGc1syRKccnjmkovV7QgapCpso&usqp=CAU" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                <path />
                            </svg>
                            <div class="card__header-text">
                                <h3 class="card__title">On Privacy and Security in Social Media</h3>
                                <p>Social networks have become a part of human life. Starting from sharing information like text, photos, messages  ...... Read More</p>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        
        <?php } ?>
        
        
    </ul>


        <div style="text-align: center;">
            <h2>Read More Articles!!</h2>
        </div>


        <div class="wrapper">
    <ul class="cards">
        <li>
            <a href="https://www.isaca.org/resources/isaca-journal/past-issues/2012/lack-of-privacy-awareness-in-social-networks" target="_blank" class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ1s59Pj-3_axmE7dqOxNZgC5gHq3anjMHbsltGTE-dIiZ6VAkObDbzUKsZOaSlasK7Rc&usqp=CAU" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Lack of Privacy Awareness in Social Networks</h3>
                            <p>Social networks have opened up a new avenue of communication for millions of people around the world. The major  ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>

        <li>
            <a href="https://www.fortinet.com/blog/industry-trends/7-best-practices-for-social-media-security-and-privacy" target="_blank" class="card">
                <img src="https://ginkgo-cybersec.com/wp-content/uploads/2021/10/social-3408791-1080x675.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Best Practices for Social Media Security and Privacy</h3>
                            <p>Social media provides a world of opportunities for an organization or individual to promote and expand a brand. A powerful ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>

        <li>
            <a href="https://knowledge.wharton.upenn.edu/article/impact-of-social-media/" target="_blank" class="card">
                <img src="https://knowledge.wharton.upenn.edu/wp-content/uploads/2019/07/072619_socialmedia_phonelikes-900x387.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">The Impact of Social Media: Is it Irreplaceable?</h3>
                            <p>Social media as we know it has barely reached its 20th birthday, but it’s changed the  ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>

        <li>
            <a href="https://www.simplilearn.com/real-impact-social-media-article" target="_blank" class="card">
                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/real-impact-social-media.jpg" class="card__image" alt="" />
                <div class="card__overlay">
                    <div class="card__header">
                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                            <path />
                        </svg>
                        <div class="card__header-text">
                            <h3 class="card__title">Impacts of Social Media: Advantages and Disadvantages</h3>
                            <p>The pace of change is accelerating. For example, the development of mobile technology has played an essential role in shaping the impact of  ...... Read More</p>
                        </div>
                    </div>
                </div>
            </a>
        </li>

    </ul>





    </div>

    



</body>

</html>