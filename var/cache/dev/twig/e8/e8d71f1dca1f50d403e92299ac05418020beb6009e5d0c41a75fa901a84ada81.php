<?php

/* GrowupFrontendBundle:Candidate:profile.html.twig */
class __TwigTemplate_b03f469a2a46cf3b1097ce071f7bbdd62454dedcb6ad60224f29266f7eb70fc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "GrowupFrontendBundle:Candidate:profile.html.twig", 1);
        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GrowupFrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48b082c6c4d2f9bedd7ff7ea5938ed5fdf9dd7a756520be63715d7522904be9d = $this->env->getExtension("native_profiler");
        $__internal_48b082c6c4d2f9bedd7ff7ea5938ed5fdf9dd7a756520be63715d7522904be9d->enter($__internal_48b082c6c4d2f9bedd7ff7ea5938ed5fdf9dd7a756520be63715d7522904be9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GrowupFrontendBundle:Candidate:profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b082c6c4d2f9bedd7ff7ea5938ed5fdf9dd7a756520be63715d7522904be9d->leave($__internal_48b082c6c4d2f9bedd7ff7ea5938ed5fdf9dd7a756520be63715d7522904be9d_prof);

    }

    // line 3
    public function block_profile($context, array $blocks = array())
    {
        $__internal_ade3e32c9da301426e430748db514f4571cdd3382a8ec8971a9240fa85e06741 = $this->env->getExtension("native_profiler");
        $__internal_ade3e32c9da301426e430748db514f4571cdd3382a8ec8971a9240fa85e06741->enter($__internal_ade3e32c9da301426e430748db514f4571cdd3382a8ec8971a9240fa85e06741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 4
        echo "<hr>
    <br>
    <br>
    <br>
    ";
        // line 13
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-10\"><a href=\"#\" class=\"pull-left\">
                ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "868e956_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_868e956_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/868e956_default_profile_1.jpg");
            // line 18
            echo "                <img src=\"";
            if ($this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/pictures/" . $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array()))), "html", null, true);
            } else {
                echo "/bundles/growupfrontend/images/default_profile.jpg ";
            }
            echo "\" alt=\"Example\" class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\"/>
                ";
        } else {
            // asset "868e956"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_868e956") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/868e956.jpg");
            echo "                <img src=\"";
            if ($this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array())) {
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/pictures/" . $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array()))), "html", null, true);
            } else {
                echo "/bundles/growupfrontend/images/default_profile.jpg ";
            }
            echo "\" alt=\"Example\" class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\"/>
                ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "</a>
            
        </div>
        <div class=\"col-sm-10 center-block\"><h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "username", array()), "html", null, true);
        echo "</h3></div>



    </div>
    <div class=\"row\">
        <div class=\"col-sm-3\"><!--left col-->

            <ul class=\"list-group\">
                <li class=\"list-group-item text-muted\">Profile</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Joined</strong></span> ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "createdAt", array())), "html", null, true);
        echo "</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last seen</strong></span> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastLogin", array())), "html", null, true);
        echo "</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Real name</strong></span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "firstName", array()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastName", array()), "html", null, true);
        echo "</li>

            </ul>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Documents <i class=\"fa fa-link fa-1x\"></i></div>
                <div class=\"panel-body\"><a href=\"http://bootply.com\">bootply.com</a></div>
            </div>


            <ul class=\"list-group\">
                <li class=\"list-group-item text-muted\">Education <i class=\"glyphicon glyphicon-education\"></i></li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Specialty</strong></span> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "specialty", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last degree</strong></span> ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastDegree", array()), "html", null, true);
        echo "</li>
                <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Skills</strong></span> hh</li>
            </ul>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Social Media</div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "facebook", array()), "html", null, true);
        echo "\"><i class=\"fa fa-facebook fa-2x\" style=\"color: #2b669a\"></i></a>
                    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "github", array()), "html", null, true);
        echo "\"><i class=\"fa fa-github fa-2x\" style=\"color: #0f0f0f\"></i> </a>
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "twitter", array()), "html", null, true);
        echo "\"><i class=\"fa fa-twitter fa-2x\" style=\"color: #00CCFF\"></i> </a>

                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "googlePlus", array()), "html", null, true);
        echo "\"><i class=\"fa fa-google-plus fa-2x\" style=\"color: #b94441\"></i></a>
                </div>
            </div>

        </div><!--/col-3-->
        <div class=\"col-sm-9\">

            <ul class=\"nav nav-tabs\" id=\"myTab\">
                <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a></li>
                <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a></li>
                <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
            </ul>

            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"home\">
                    <!--/table-resp-->
                    <br>
                   ";
        // line 76
        echo "
                        <a data-target=\"#myModal\" data-toggle=\"modal\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("new_idea");
        echo "\" data-title=\"Add new idea\" class=\"btn btn-success pull-right\">
                            Add New <i class=\"fa fa-plus p-r-10\"></i>
                        </a>
                          ";
        // line 80
        $this->loadTemplate("GrowupFrontendBundle:Candidate:_new-idea.html.twig", "GrowupFrontendBundle:Candidate:profile.html.twig", 80)->display($context);
        // line 81
        echo "


                    <hr>

                    <h4>My Ideas</h4>

                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">

                            <tbody>
                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ideas"]) ? $context["ideas"] : $this->getContext($context, "ideas")));
        foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
            // line 93
            echo "                            <tr>
                                <td>
                                    <a data-target=\"#editModal\" data-toggle=\"modal\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_idea", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"pull-right fa fa-edit\" style=\"color: #00b3ee\"></i></a>
                                    ";
            // line 96
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GrowupFrontendBundle:Idea:edit", array("id" => $this->getAttribute($context["idea"], "id", array()))));
            echo "

                                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_delete", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\"><i class=\"pull-right fa fa-remove\" style=\"color: #b92c28\"></i></a>
                                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_show", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\" style=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "title", array()), "html", null, true);
            echo "</a></td>
                            </tr>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                            </tbody>
                        </table>

                    </div>
                    ";
        // line 106
        $this->loadTemplate("GrowupFrontendBundle:Candidate:_edit-idea.html.twig", "GrowupFrontendBundle:Candidate:profile.html.twig", 106)->display($context);
        // line 107
        echo "

                </div><!--/tab-pane-->
                <div class=\"tab-pane\" id=\"messages\">

                    <h2></h2>

                    <ul class=\"list-group\">
                        <li class=\"list-group-item text-muted\">Inbox</li>
                        <li class=\"list-group-item text-right\"><a href=\"#\" class=\"pull-left\">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>
                    </ul>

                </div><!--/tab-pane-->
                <div class=\"tab-pane\" id=\"settings\">


                    <hr>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"first_name\"><h4>First name</h4></label>
                                <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" placeholder=\"first name\" title=\"enter your first name if any.\">
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"last_name\"><h4>Last name</h4></label>
                                <input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" placeholder=\"last name\" title=\"enter your last name if any.\">
                            </div>
                        </div>

                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"phone\"><h4>Phone</h4></label>
                                <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\" placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"mobile\"><h4>Mobile</h4></label>
                                <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\" placeholder=\"enter mobile number\" title=\"enter your mobile number if any.\">
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"email\"><h4>Email</h4></label>
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"you@email.com\" title=\"enter your email.\">
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"email\"><h4>Location</h4></label>
                                <input type=\"email\" class=\"form-control\" id=\"location\" placeholder=\"somewhere\" title=\"enter a location\">
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"password\"><h4>Password</h4></label>
                                <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" placeholder=\"password\" title=\"enter your password.\">
                            </div>
                        </div>
                        <div class=\"form-group\">

                            <div class=\"col-xs-6\">
                                <label for=\"password2\"><h4>Verify</h4></label>
                                <input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\" placeholder=\"password2\" title=\"enter your password2.\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-12\">
                                <br>
                                <button class=\"btn  btn-success\" type=\"submit\"><i class=\"glyphicon glyphicon-ok-sign\"></i> Save</button>
                                <button class=\"btn \" type=\"reset\"><i class=\"glyphicon glyphicon-repeat\"></i> Reset</button>
                            </div>
                        </div>


                </div>

            </div><!--/tab-pane-->
        </div><!--/tab-content-->

    </div><!--/col-9-->
</div><!--/row-->

";
        
        $__internal_ade3e32c9da301426e430748db514f4571cdd3382a8ec8971a9240fa85e06741->leave($__internal_ade3e32c9da301426e430748db514f4571cdd3382a8ec8971a9240fa85e06741_prof);

    }

    public function getTemplateName()
    {
        return "GrowupFrontendBundle:Candidate:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 107,  230 => 106,  224 => 102,  213 => 99,  209 => 98,  204 => 96,  200 => 95,  196 => 93,  192 => 92,  179 => 81,  177 => 80,  171 => 77,  168 => 76,  148 => 58,  143 => 56,  139 => 55,  135 => 54,  125 => 47,  121 => 46,  104 => 34,  100 => 33,  96 => 32,  83 => 22,  78 => 19,  56 => 18,  52 => 17,  46 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GrowupFrontendBundle::base.html.twig' %}*/
/* */
/* {% block profile %}*/
/* <hr>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     {#  <li class="avatar">*/
/*             <img id="leadAvatar" src="{% if candidate.profilImage %}{{ lead.getAvatar('thumb') }}{% else %}/bundles/rocketbackend/images/avatars/avatar{{ lead.id|last }}_big.png{% endif %}" alt class="img-circle profile-photo">*/
/*             <button id="avatarButton"><i class="fa fa-camera"></i></button>*/
/*             <input type="file" name="avatar" id="avatarUpload" accept="images/*" class="hidden" data-url="{{ path('backend_upload_user_avatar') }}" />*/
/*         </li>#}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-10"><a href="#" class="pull-left">*/
/*                 {% image '@GrowupFrontendBundle/Resources/public/images/default_profile.jpg' %}*/
/*                 <img src="{% if candidate.profilImage %}{{ asset('uploads/pictures/' ~ candidate.profilImage) }}{% else %}/bundles/growupfrontend/images/default_profile.jpg {% endif %}" alt="Example" class="img-circle img-responsive" width="150px" height="150px"/>*/
/*                 {% endimage %}</a>*/
/*             */
/*         </div>*/
/*         <div class="col-sm-10 center-block"><h3>{{ candidate.username }}</h3></div>*/
/* */
/* */
/* */
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-3"><!--left col-->*/
/* */
/*             <ul class="list-group">*/
/*                 <li class="list-group-item text-muted">Profile</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> {{ candidate.createdAt| date }}</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> {{ candidate.lastLogin| date }}</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> {{ candidate.firstName}}  {{ candidate.lastName}}</li>*/
/* */
/*             </ul>*/
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">Documents <i class="fa fa-link fa-1x"></i></div>*/
/*                 <div class="panel-body"><a href="http://bootply.com">bootply.com</a></div>*/
/*             </div>*/
/* */
/* */
/*             <ul class="list-group">*/
/*                 <li class="list-group-item text-muted">Education <i class="glyphicon glyphicon-education"></i></li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Specialty</strong></span> {{ candidate.specialty }}</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Last degree</strong></span> {{ candidate.lastDegree }}</li>*/
/*                 <li class="list-group-item text-right"><span class="pull-left"><strong>Skills</strong></span> hh</li>*/
/*             </ul>*/
/* */
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">Social Media</div>*/
/*                 <div class="panel-body">*/
/*                     <a href="{{ candidate.facebook }}"><i class="fa fa-facebook fa-2x" style="color: #2b669a"></i></a>*/
/*                     <a href="{{ candidate.github }}"><i class="fa fa-github fa-2x" style="color: #0f0f0f"></i> </a>*/
/*                     <a href="{{ candidate.twitter }}"><i class="fa fa-twitter fa-2x" style="color: #00CCFF"></i> </a>*/
/* */
/*                     <a href="{{ candidate.googlePlus }}"><i class="fa fa-google-plus fa-2x" style="color: #b94441"></i></a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div><!--/col-3-->*/
/*         <div class="col-sm-9">*/
/* */
/*             <ul class="nav nav-tabs" id="myTab">*/
/*                 <li class="active"><a href="#home" data-toggle="tab">Home</a></li>*/
/*                 <li><a href="#messages" data-toggle="tab">Messages</a></li>*/
/*                 <li><a href="#settings" data-toggle="tab">Settings</a></li>*/
/*             </ul>*/
/* */
/*             <div class="tab-content">*/
/*                 <div class="tab-pane active" id="home">*/
/*                     <!--/table-resp-->*/
/*                     <br>*/
/*                    {# <button class="btn btn-success glyphicon glyphicon-plus pull-right"data-toggle="modal" data-target="#myModal"> Add new Idea</button>#}*/
/* */
/*                         <a data-target="#myModal" data-toggle="modal" href="{{ path('new_idea') }}" data-title="Add new idea" class="btn btn-success pull-right">*/
/*                             Add New <i class="fa fa-plus p-r-10"></i>*/
/*                         </a>*/
/*                           {% include 'GrowupFrontendBundle:Candidate:_new-idea.html.twig'  %}*/
/* */
/* */
/* */
/*                     <hr>*/
/* */
/*                     <h4>My Ideas</h4>*/
/* */
/*                     <div class="table-responsive">*/
/*                         <table class="table table-hover">*/
/* */
/*                             <tbody>*/
/*                             {% for idea in ideas %}*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <a data-target="#editModal" data-toggle="modal" href="{{ path('edit_idea', {'id':idea.id }) }}" ><i class="pull-right fa fa-edit" style="color: #00b3ee"></i></a>*/
/*                                     {{ render (controller('GrowupFrontendBundle:Idea:edit', { id: idea.id })) }}*/
/* */
/*                                     <a href="{{ path('idea_delete', { 'id': idea.id }) }}"><i class="pull-right fa fa-remove" style="color: #b92c28"></i></a>*/
/*                                     <a href="{{ path('idea_show', { 'id': idea.id }) }}" style=""> {{ idea.title }}</a></td>*/
/*                             </tr>*/
/*                               {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     </div>*/
/*                     {% include 'GrowupFrontendBundle:Candidate:_edit-idea.html.twig'  %}*/
/* */
/* */
/*                 </div><!--/tab-pane-->*/
/*                 <div class="tab-pane" id="messages">*/
/* */
/*                     <h2></h2>*/
/* */
/*                     <ul class="list-group">*/
/*                         <li class="list-group-item text-muted">Inbox</li>*/
/*                         <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link to the latest summary report from the..</a> 2.13.2014</li>*/
/*                     </ul>*/
/* */
/*                 </div><!--/tab-pane-->*/
/*                 <div class="tab-pane" id="settings">*/
/* */
/* */
/*                     <hr>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="first_name"><h4>First name</h4></label>*/
/*                                 <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="last_name"><h4>Last name</h4></label>*/
/*                                 <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="phone"><h4>Phone</h4></label>*/
/*                                 <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <div class="col-xs-6">*/
/*                                 <label for="mobile"><h4>Mobile</h4></label>*/
/*                                 <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="email"><h4>Email</h4></label>*/
/*                                 <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="email"><h4>Location</h4></label>*/
/*                                 <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="password"><h4>Password</h4></label>*/
/*                                 <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 <label for="password2"><h4>Verify</h4></label>*/
/*                                 <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-xs-12">*/
/*                                 <br>*/
/*                                 <button class="btn  btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>*/
/*                                 <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                 </div>*/
/* */
/*             </div><!--/tab-pane-->*/
/*         </div><!--/tab-content-->*/
/* */
/*     </div><!--/col-9-->*/
/* </div><!--/row-->*/
/* */
/* {% endblock %}*/
/* */
