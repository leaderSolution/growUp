<?php

/* GrowupFrontendBundle:Default:index.html.twig */
class __TwigTemplate_cc24208a8fdcc714b1bca59a9e0097dcfd293f3ec13d35c4a5bcf61e0ffa0d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "GrowupFrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'home' => array($this, 'block_home'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrowupFrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_383399ef8241ce8b0c52502ebcbfbc8e8f162bd74ffc44962674f11a44e7253f = $this->env->getExtension("native_profiler");
        $__internal_383399ef8241ce8b0c52502ebcbfbc8e8f162bd74ffc44962674f11a44e7253f->enter($__internal_383399ef8241ce8b0c52502ebcbfbc8e8f162bd74ffc44962674f11a44e7253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383399ef8241ce8b0c52502ebcbfbc8e8f162bd74ffc44962674f11a44e7253f->leave($__internal_383399ef8241ce8b0c52502ebcbfbc8e8f162bd74ffc44962674f11a44e7253f_prof);

    }

    // line 4
    public function block_home($context, array $blocks = array())
    {
        $__internal_8e7f85e7e7c1cdc657e8e479d24a1a3f221d0f900304367db017acb5d59cd8ea = $this->env->getExtension("native_profiler");
        $__internal_8e7f85e7e7c1cdc657e8e479d24a1a3f221d0f900304367db017acb5d59cd8ea->enter($__internal_8e7f85e7e7c1cdc657e8e479d24a1a3f221d0f900304367db017acb5d59cd8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        // line 5
        echo "<header>
    <div class=\"header-content\">
        <div class=\"header-content-inner\">
            <h1>Grow Up </h1>
            <hr>
            <h2>with your start Up</h2>
            <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">start it !</a>
        </div>
    </div>
</header>

<section class=\"bg-primary\" id=\"about\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">Start a new business</h2>
                <hr class=\"light\">
                <p class=\"text-faded\">Dreaming of becoming an entrepreneur? If owning your own business is your goal, the good news is, you can achieve it with a great idea and some hard work.</p>
                <a href=\"#\" class=\"btn btn-default btn-xl\">Get Started!</a>
            </div>
        </div>
    </div>
</section>

<section id=\"services\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2 class=\"section-heading\">At Your Service</h2>
                <hr class=\"primary\">
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-book wow bounceIn text-primary\"></i>
                    <h3>Trainig courses</h3>
                    <p class=\"text-muted\">When you train with us, you're training with the very best in the business...</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-rocket wow bounceIn text-primary\" data-wow-delay=\".1s\"></i>
                    <h3>Coachnig</h3>
                    <p class=\"text-muted\">Start-up coaching is designed for you if you're ready to turn your idea into a thriving business. </p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-road wow bounceIn text-primary\" data-wow-delay=\".2s\"></i>
                    <h3>Leading Your Startup</h3>
                    <p class=\"text-muted\">We lead you to turn your dream into Reality.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 text-center\">
                <div class=\"service-box\">
                    <i class=\"fa fa-4x fa-heart wow bounceIn text-primary\" data-wow-delay=\".3s\"></i>
                    <h3>Made with Love</h3>
                    <p class=\"text-muted\">With our team, you can execute your startup easily and more efficiently </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class=\"no-padding\" id=\"portfolio\">
    <div class=\"container-fluid\">
        <div class=\"row no-gutter\">
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 1
                            </div>
                            <div class=\"project-name\">
                                Select the Good Idea
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 2
                            </div>
                            <div class=\"project-name\">
                                Write your business PLAN
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 3
                            </div>
                            <div class=\"project-name\">
                                offering improved benefits plans
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/4.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 4
                            </div>
                            <div class=\"project-name\">
                                How to Raise Capital ?
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 5
                            </div>
                            <div class=\"project-name\">
                                Looking for franchise
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a href=\"#\" class=\"portfolio-box\">
                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/growupfrontend/img/portfolio/6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    <div class=\"portfolio-box-caption\">
                        <div class=\"portfolio-box-caption-content\">
                            <div class=\"project-category text-faded\">
                                Step 6
                            </div>
                            <div class=\"project-name\">
                                Execute your startup
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!--<aside class=\"bg-dark\">
    <div class=\"container text-center\">
        <div class=\"call-to-action\">
            <h2>Free Download at Start Bootstrap!</h2>
            <a href=\"#\" class=\"btn btn-default btn-xl wow tada\">Download Now!</a>
        </div>
    </div>
</aside>-->

<section id=\"contact\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <h2 class=\"section-heading\">Let's Get In Touch!</h2>
                <hr class=\"primary\">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class=\"col-lg-4 col-lg-offset-2 text-center\">
                <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
                <p>+216/ 21-189-123</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
                <p><a href=\"mailto:your-email@your-domain.com\">leader.of.solutions@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_8e7f85e7e7c1cdc657e8e479d24a1a3f221d0f900304367db017acb5d59cd8ea->leave($__internal_8e7f85e7e7c1cdc657e8e479d24a1a3f221d0f900304367db017acb5d59cd8ea_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 152,  186 => 137,  168 => 122,  150 => 107,  132 => 92,  114 => 77,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'GrowupFrontendBundle::base.html.twig' %}*/
/* */
/* */
/* {% block home %}*/
/* <header>*/
/*     <div class="header-content">*/
/*         <div class="header-content-inner">*/
/*             <h1>Grow Up </h1>*/
/*             <hr>*/
/*             <h2>with your start Up</h2>*/
/*             <a href="#about" class="btn btn-primary btn-xl page-scroll">start it !</a>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
/* */
/* <section class="bg-primary" id="about">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <h2 class="section-heading">Start a new business</h2>*/
/*                 <hr class="light">*/
/*                 <p class="text-faded">Dreaming of becoming an entrepreneur? If owning your own business is your goal, the good news is, you can achieve it with a great idea and some hard work.</p>*/
/*                 <a href="#" class="btn btn-default btn-xl">Get Started!</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section id="services">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2 class="section-heading">At Your Service</h2>*/
/*                 <hr class="primary">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-3 col-md-6 text-center">*/
/*                 <div class="service-box">*/
/*                     <i class="fa fa-4x fa-book wow bounceIn text-primary"></i>*/
/*                     <h3>Trainig courses</h3>*/
/*                     <p class="text-muted">When you train with us, you're training with the very best in the business...</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6 text-center">*/
/*                 <div class="service-box">*/
/*                     <i class="fa fa-4x fa-rocket wow bounceIn text-primary" data-wow-delay=".1s"></i>*/
/*                     <h3>Coachnig</h3>*/
/*                     <p class="text-muted">Start-up coaching is designed for you if you're ready to turn your idea into a thriving business. </p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6 text-center">*/
/*                 <div class="service-box">*/
/*                     <i class="fa fa-4x fa-road wow bounceIn text-primary" data-wow-delay=".2s"></i>*/
/*                     <h3>Leading Your Startup</h3>*/
/*                     <p class="text-muted">We lead you to turn your dream into Reality.</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-3 col-md-6 text-center">*/
/*                 <div class="service-box">*/
/*                     <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>*/
/*                     <h3>Made with Love</h3>*/
/*                     <p class="text-muted">With our team, you can execute your startup easily and more efficiently </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <section class="no-padding" id="portfolio">*/
/*     <div class="container-fluid">*/
/*         <div class="row no-gutter">*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/1.jpg')}}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 1*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 Select the Good Idea*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/2.jpg')}}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 2*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 Write your business PLAN*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/3.jpg')}}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 3*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 offering improved benefits plans*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/4.jpg')}}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 4*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 How to Raise Capital ?*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/5.jpg') }}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 5*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 Looking for franchise*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-lg-4 col-sm-6">*/
/*                 <a href="#" class="portfolio-box">*/
/*                     <img src="{{asset ('bundles/growupfrontend/img/portfolio/6.jpg') }}" class="img-responsive" alt="">*/
/*                     <div class="portfolio-box-caption">*/
/*                         <div class="portfolio-box-caption-content">*/
/*                             <div class="project-category text-faded">*/
/*                                 Step 6*/
/*                             </div>*/
/*                             <div class="project-name">*/
/*                                 Execute your startup*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* <!--<aside class="bg-dark">*/
/*     <div class="container text-center">*/
/*         <div class="call-to-action">*/
/*             <h2>Free Download at Start Bootstrap!</h2>*/
/*             <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>*/
/*         </div>*/
/*     </div>*/
/* </aside>-->*/
/* */
/* <section id="contact">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*                 <h2 class="section-heading">Let's Get In Touch!</h2>*/
/*                 <hr class="primary">*/
/*                 <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>*/
/*             </div>*/
/*             <div class="col-lg-4 col-lg-offset-2 text-center">*/
/*                 <i class="fa fa-phone fa-3x wow bounceIn"></i>*/
/*                 <p>+216/ 21-189-123</p>*/
/*             </div>*/
/*             <div class="col-lg-4 text-center">*/
/*                 <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>*/
/*                 <p><a href="mailto:your-email@your-domain.com">leader.of.solutions@gmail.com</a></p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* {% endblock  %}*/
