<?php

/* @GrowupFrontend/Candidate/profile.html.twig */
class __TwigTemplate_dab00b686892e713315649e7714c1d78924b678973bcf80c247b7140413e73d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GrowupFrontendBundle::base.html.twig", "@GrowupFrontend/Candidate/profile.html.twig", 1);
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
        $__internal_8aebcdcb8bcdbc88af4b6bb176c08d1a297400f9bdb2989ba5ff28a9f4a8a5ca = $this->env->getExtension("native_profiler");
        $__internal_8aebcdcb8bcdbc88af4b6bb176c08d1a297400f9bdb2989ba5ff28a9f4a8a5ca->enter($__internal_8aebcdcb8bcdbc88af4b6bb176c08d1a297400f9bdb2989ba5ff28a9f4a8a5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrowupFrontend/Candidate/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aebcdcb8bcdbc88af4b6bb176c08d1a297400f9bdb2989ba5ff28a9f4a8a5ca->leave($__internal_8aebcdcb8bcdbc88af4b6bb176c08d1a297400f9bdb2989ba5ff28a9f4a8a5ca_prof);

    }

    // line 3
    public function block_profile($context, array $blocks = array())
    {
        $__internal_44f38cc46d9f735e63a3001c5b1f45374b48ad805c28b890d3496f412c3fec7e = $this->env->getExtension("native_profiler");
        $__internal_44f38cc46d9f735e63a3001c5b1f45374b48ad805c28b890d3496f412c3fec7e->enter($__internal_44f38cc46d9f735e63a3001c5b1f45374b48ad805c28b890d3496f412c3fec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 4
        echo "    <hr>
    <br>
    <br>
    <br>
    ";
        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"row\">
                <div class=\"col-sm-10\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_pic", array("id" => $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "id", array()))), "html", null, true);
        echo "\" class=\"pull-left\" data-toggle=\"modal\"
                       data-target=\"#myModal\">
                        ";
        // line 20
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "868e956_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_868e956_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/868e956_default_profile_1.jpg");
            // line 21
            echo "                        <img src=\"";
            if ($this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array()), "html", null, true);
                echo "\" alt=\"Example\"
                             class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\">
                    ";
            } else {
                // line 23
                echo "/bundles/growupfrontend/images/default_profile.jpg ";
            }
            echo "\"
                        alt=\"Example\" class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\"/>
                        ";
        } else {
            // asset "868e956"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_868e956") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/868e956.jpg");
            // line 21
            echo "                        <img src=\"";
            if ($this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "profilImage", array()), "html", null, true);
                echo "\" alt=\"Example\"
                             class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\">
                    ";
            } else {
                // line 23
                echo "/bundles/growupfrontend/images/default_profile.jpg ";
            }
            echo "\"
                        alt=\"Example\" class=\"img-circle img-responsive\" width=\"150px\" height=\"150px\"/>
                        ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
                    </a>

                    ";
        // line 29
        $this->loadTemplate("GrowupFrontendBundle:Candidate:_upload.html.twig", "@GrowupFrontend/Candidate/profile.html.twig", 29)->display($context);
        // line 30
        echo "

                </div>
                <div class=\"col-sm-10 center-block\"><h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "username", array()), "html", null, true);
        echo "</h3></div>


            </div>
            <div class=\"row\">
                <div class=\"col-sm-3\"><!--left col-->

                    <ul class=\"list-group\">
                        <li class=\"list-group-item text-muted\">Profile</li>
                        <li class=\"list-group-item text-right\"><span
                                    class=\"pull-left\"><strong>Joined</strong></span> ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "createdAt", array())), "html", null, true);
        echo "
                        </li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last
                                    seen</strong></span> ";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastLogin", array())), "html", null, true);
        echo "</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Real
                                    name</strong></span> ";
        // line 48
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
                        <li class=\"list-group-item text-muted\">Education <i class=\"glyphicon glyphicon-education\"></i>
                        </li>
                        <li class=\"list-group-item text-right\"><span
                                    class=\"pull-left\"><strong>Specialty</strong></span> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "specialty", array()), "html", null, true);
        echo "</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Last
                                    degree</strong></span> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "lastDegree", array()), "html", null, true);
        echo "</li>
                        <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong>Skills</strong></span> hh
                        </li>
                    </ul>

                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">Social Media</div>
                        <div class=\"panel-body\">
                            <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "facebook", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-facebook fa-2x\"
                                                                  style=\"color: #2b669a\"></i></a>
                            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "github", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-github fa-2x\" style=\"color: #0f0f0f\"></i>
                            </a>
                            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "twitter", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-twitter fa-2x\" style=\"color: #00CCFF\"></i>
                            </a>

                            <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "googlePlus", array()), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"fa fa-google-plus fa-2x\"
                                                                    style=\"color: #b94441\"></i></a>
                        </div>
                    </div>

                </div>
                <!--/col-3-->
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
        // line 99
        echo "
                            <a data-target=\"#myModal\" data-toggle=\"modal\" href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("new_idea");
        echo "\"
                               data-title=\"Add new idea\" class=\"btn btn-success pull-right\">
                                Add New <i class=\"fa fa-plus p-r-10\"></i>
                            </a>
                            ";
        // line 104
        $this->loadTemplate("GrowupFrontendBundle:Candidate:_new-idea.html.twig", "@GrowupFrontend/Candidate/profile.html.twig", 104)->display($context);
        // line 105
        echo "
                            <div class=\"block-erreurs\"></div>

                            <div class=\"col-lg-6 col-md-12\">
                                <div id=\"block-edit\"></div>
                            </div>

                            <hr>

                            <h4>My Ideas</h4>

                            <div class=\"table-responsive\" id=\"madiv\">
                                <table class=\"table table-hover\">

                                    <tbody>
                                    ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ideas"]) ? $context["ideas"] : $this->getContext($context, "ideas")));
        foreach ($context['_seq'] as $context["_key"] => $context["idea"]) {
            // line 121
            echo "                                        <tr id=\"row-to-hide-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "id", array()), "html", null, true);
            echo "\">
                                            <td class=\"center\">

                                                <a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_idea", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\">
                                                    <i class=\"pull-right fa fa-edit\"
                                                       style=\"color: #00b3ee\"></i>
                                                    ";
            // line 128
            echo "
                                                </a>
                                                ";
            // line 131
            echo "

                                                <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_delete", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\"
                                                   data-entity-id=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "id", array()), "html", null, true);
            echo "\"
                                                   class=\"remove_item\"><i class=\"pull-right fa fa-remove\"
                                                                          style=\"color: #b92c28\"></i></a>


                                                <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("idea_show", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\"
                                                   style=\"\"> ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["idea"], "title", array()), "html", null, true);
            echo "</a>

                                                <div class=\"visible-xs visible-sm hidden-md hidden-lg\">
                                                    <div class=\"btn-group\" dropdown>
                                                        <button type=\"button\"
                                                                class=\"btn btn-primary btn-o btn-sm dropdown-toggle\"
                                                                dropdown-toggle>
                                                            <i class=\"fa fa-cog\"></i>&nbsp;<span
                                                                    class=\"caret\"></span>
                                                        </button>
                                                        <ul class=\"dropdown-menu pull-right dropdown-light\"
                                                            role=\"menu\">
                                                            <li>
                                                                <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_idea", array("id" => $this->getAttribute($context["idea"], "id", array()))), "html", null, true);
            echo "\">

                                                                </a>

                                                            </li>
                                                        </ul>
                                                    </div>


                                                </div>

                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
                                    </tbody>
                                </table>

                            </div>


                        </div>
                        <!--/tab-pane-->
                        <div class=\"tab-pane\" id=\"messages\">

                            <h2></h2>

                            <ul class=\"list-group\">
                                <li class=\"list-group-item text-muted\">Inbox</li>
                                <li class=\"list-group-item text-right\"><a href=\"#\" class=\"pull-left\">Here is your a link
                                        to
                                        the latest summary report from the..</a> 2.13.2014
                                </li>
                            </ul>

                        </div>
                        <!--/tab-pane-->
                        <div class=\"tab-pane\" id=\"settings\">


                            <hr>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"first_name\"><h4>First name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\"
                                           placeholder=\"first name\" title=\"enter your first name if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"last_name\"><h4>Last name</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\"
                                           placeholder=\"last name\" title=\"enter your last name if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"phone\"><h4>Phone</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" id=\"phone\"
                                           placeholder=\"enter phone\" title=\"enter your phone number if any.\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"mobile\"><h4>Mobile</h4></label>
                                    <input type=\"text\" class=\"form-control\" name=\"mobile\" id=\"mobile\"
                                           placeholder=\"enter mobile number\" title=\"enter your mobile number if any.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Email</h4></label>
                                    <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"
                                           placeholder=\"you@email.com\" title=\"enter your email.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"email\"><h4>Location</h4></label>
                                    <input type=\"email\" class=\"form-control\" id=\"location\" placeholder=\"somewhere\"
                                           title=\"enter a location\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password\"><h4>Password</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\"
                                           placeholder=\"password\" title=\"enter your password.\">
                                </div>
                            </div>
                            <div class=\"form-group\">

                                <div class=\"col-xs-6\">
                                    <label for=\"password2\"><h4>Verify</h4></label>
                                    <input type=\"password\" class=\"form-control\" name=\"password2\" id=\"password2\"
                                           placeholder=\"password2\" title=\"enter your password2.\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-12\">
                                    <br>
                                    <button class=\"btn  btn-success\" type=\"submit\"><i
                                                class=\"glyphicon glyphicon-ok-sign\"></i> Save
                                    </button>
                                    <button class=\"btn \" type=\"reset\"><i class=\"glyphicon glyphicon-repeat\"></i> Reset
                                    </button>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!--/tab-pane-->
                </div>
                <!--/tab-content-->

            </div>
            <!--/col-9-->
        </div>
        <!--/row-->
    </div>
";
        
        $__internal_44f38cc46d9f735e63a3001c5b1f45374b48ad805c28b890d3496f412c3fec7e->leave($__internal_44f38cc46d9f735e63a3001c5b1f45374b48ad805c28b890d3496f412c3fec7e_prof);

    }

    public function getTemplateName()
    {
        return "@GrowupFrontend/Candidate/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 169,  290 => 153,  274 => 140,  270 => 139,  262 => 134,  258 => 133,  254 => 131,  250 => 128,  244 => 124,  237 => 121,  233 => 120,  216 => 105,  214 => 104,  207 => 100,  204 => 99,  182 => 79,  176 => 76,  171 => 74,  166 => 72,  155 => 64,  150 => 62,  131 => 48,  126 => 46,  120 => 43,  107 => 33,  102 => 30,  100 => 29,  95 => 26,  87 => 23,  79 => 21,  70 => 23,  62 => 21,  58 => 20,  53 => 18,  46 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'GrowupFrontendBundle::base.html.twig' %}*/
/* */
/* {% block profile %}*/
/*     <hr>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     {#  <li class="avatar">*/
/*             <img id="leadAvatar" src="{% if candidate.profilImage %}{{ lead.getAvatar('thumb') }}{% else %}/bundles/rocketbackend/images/avatars/avatar{{ lead.id|last }}_big.png{% endif %}" alt class="img-circle profile-photo">*/
/*             <button id="avatarButton"><i class="fa fa-camera"></i></button>*/
/*             <input type="file" name="avatar" id="avatarUpload" accept="images/*" class="hidden" data-url="{{ path('backend_upload_user_avatar') }}" />*/
/*         </li>#}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="row">*/
/*                 <div class="col-sm-10">*/
/*                     <a href="{{ path('new_pic', {'id': candidate.id }) }}" class="pull-left" data-toggle="modal"*/
/*                        data-target="#myModal">*/
/*                         {% image '@GrowupFrontendBundle/Resources/public/images/default_profile.jpg' %}*/
/*                         <img src="{% if candidate.profilImage %}{{ candidate.profilImage }}" alt="Example"*/
/*                              class="img-circle img-responsive" width="150px" height="150px">*/
/*                     {% else %}/bundles/growupfrontend/images/default_profile.jpg {% endif %}"*/
/*                         alt="Example" class="img-circle img-responsive" width="150px" height="150px"/>*/
/*                         {% endimage %}*/
/* */
/*                     </a>*/
/* */
/*                     {% include 'GrowupFrontendBundle:Candidate:_upload.html.twig' %}*/
/* */
/* */
/*                 </div>*/
/*                 <div class="col-sm-10 center-block"><h3>{{ candidate.username }}</h3></div>*/
/* */
/* */
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-3"><!--left col-->*/
/* */
/*                     <ul class="list-group">*/
/*                         <li class="list-group-item text-muted">Profile</li>*/
/*                         <li class="list-group-item text-right"><span*/
/*                                     class="pull-left"><strong>Joined</strong></span> {{ candidate.createdAt| date }}*/
/*                         </li>*/
/*                         <li class="list-group-item text-right"><span class="pull-left"><strong>Last*/
/*                                     seen</strong></span> {{ candidate.lastLogin| date }}</li>*/
/*                         <li class="list-group-item text-right"><span class="pull-left"><strong>Real*/
/*                                     name</strong></span> {{ candidate.firstName }}  {{ candidate.lastName }}</li>*/
/* */
/*                     </ul>*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">Documents <i class="fa fa-link fa-1x"></i></div>*/
/*                         <div class="panel-body"><a href="http://bootply.com">bootply.com</a></div>*/
/*                     </div>*/
/* */
/* */
/*                     <ul class="list-group">*/
/*                         <li class="list-group-item text-muted">Education <i class="glyphicon glyphicon-education"></i>*/
/*                         </li>*/
/*                         <li class="list-group-item text-right"><span*/
/*                                     class="pull-left"><strong>Specialty</strong></span> {{ candidate.specialty }}</li>*/
/*                         <li class="list-group-item text-right"><span class="pull-left"><strong>Last*/
/*                                     degree</strong></span> {{ candidate.lastDegree }}</li>*/
/*                         <li class="list-group-item text-right"><span class="pull-left"><strong>Skills</strong></span> hh*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">Social Media</div>*/
/*                         <div class="panel-body">*/
/*                             <a href="{{ candidate.facebook }}" target="_blank"><i class="fa fa-facebook fa-2x"*/
/*                                                                   style="color: #2b669a"></i></a>*/
/*                             <a href="{{ candidate.github }}" target="_blank"><i class="fa fa-github fa-2x" style="color: #0f0f0f"></i>*/
/*                             </a>*/
/*                             <a href="{{ candidate.twitter }}" target="_blank"><i class="fa fa-twitter fa-2x" style="color: #00CCFF"></i>*/
/*                             </a>*/
/* */
/*                             <a href="{{ candidate.googlePlus }}" target="_blank"><i class="fa fa-google-plus fa-2x"*/
/*                                                                     style="color: #b94441"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!--/col-3-->*/
/*                 <div class="col-sm-9">*/
/* */
/*                     <ul class="nav nav-tabs" id="myTab">*/
/*                         <li class="active"><a href="#home" data-toggle="tab">Home</a></li>*/
/*                         <li><a href="#messages" data-toggle="tab">Messages</a></li>*/
/*                         <li><a href="#settings" data-toggle="tab">Settings</a></li>*/
/*                     </ul>*/
/* */
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="home">*/
/*                             <!--/table-resp-->*/
/*                             <br>*/
/*                             {# <button class="btn btn-success glyphicon glyphicon-plus pull-right"data-toggle="modal" data-target="#myModal"> Add new Idea</button>#}*/
/* */
/*                             <a data-target="#myModal" data-toggle="modal" href="{{ path('new_idea') }}"*/
/*                                data-title="Add new idea" class="btn btn-success pull-right">*/
/*                                 Add New <i class="fa fa-plus p-r-10"></i>*/
/*                             </a>*/
/*                             {% include 'GrowupFrontendBundle:Candidate:_new-idea.html.twig' %}*/
/* */
/*                             <div class="block-erreurs"></div>*/
/* */
/*                             <div class="col-lg-6 col-md-12">*/
/*                                 <div id="block-edit"></div>*/
/*                             </div>*/
/* */
/*                             <hr>*/
/* */
/*                             <h4>My Ideas</h4>*/
/* */
/*                             <div class="table-responsive" id="madiv">*/
/*                                 <table class="table table-hover">*/
/* */
/*                                     <tbody>*/
/*                                     {% for idea in ideas %}*/
/*                                         <tr id="row-to-hide-{{ idea.id }}">*/
/*                                             <td class="center">*/
/* */
/*                                                 <a href="{{ path('edit_idea', {'id':idea.id }) }}">*/
/*                                                     <i class="pull-right fa fa-edit"*/
/*                                                        style="color: #00b3ee"></i>*/
/*                                                     {#{{ render (controller('GrowupFrontendBundle:Idea:edit', { id: idea.id })) }}#}*/
/* */
/*                                                 </a>*/
/*                                                 {#{% include 'GrowupFrontendBundle:Candidate:_edit-idea.html.twig' %}#}*/
/* */
/* */
/*                                                 <a href="{{ path('idea_delete', { 'id': idea.id }) }}"*/
/*                                                    data-entity-id="{{ idea.id }}"*/
/*                                                    class="remove_item"><i class="pull-right fa fa-remove"*/
/*                                                                           style="color: #b92c28"></i></a>*/
/* */
/* */
/*                                                 <a href="{{ path('idea_show', { 'id': idea.id }) }}"*/
/*                                                    style=""> {{ idea.title }}</a>*/
/* */
/*                                                 <div class="visible-xs visible-sm hidden-md hidden-lg">*/
/*                                                     <div class="btn-group" dropdown>*/
/*                                                         <button type="button"*/
/*                                                                 class="btn btn-primary btn-o btn-sm dropdown-toggle"*/
/*                                                                 dropdown-toggle>*/
/*                                                             <i class="fa fa-cog"></i>&nbsp;<span*/
/*                                                                     class="caret"></span>*/
/*                                                         </button>*/
/*                                                         <ul class="dropdown-menu pull-right dropdown-light"*/
/*                                                             role="menu">*/
/*                                                             <li>*/
/*                                                                 <a href="{{ path('edit_idea', {'id': idea.id} ) }}">*/
/* */
/*                                                                 </a>*/
/* */
/*                                                             </li>*/
/*                                                         </ul>*/
/*                                                     </div>*/
/* */
/* */
/*                                                 </div>*/
/* */
/*                                             </td>*/
/* */
/*                                         </tr>*/
/* */
/*                                     {% endfor %}*/
/* */
/*                                     </tbody>*/
/*                                 </table>*/
/* */
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <!--/tab-pane-->*/
/*                         <div class="tab-pane" id="messages">*/
/* */
/*                             <h2></h2>*/
/* */
/*                             <ul class="list-group">*/
/*                                 <li class="list-group-item text-muted">Inbox</li>*/
/*                                 <li class="list-group-item text-right"><a href="#" class="pull-left">Here is your a link*/
/*                                         to*/
/*                                         the latest summary report from the..</a> 2.13.2014*/
/*                                 </li>*/
/*                             </ul>*/
/* */
/*                         </div>*/
/*                         <!--/tab-pane-->*/
/*                         <div class="tab-pane" id="settings">*/
/* */
/* */
/*                             <hr>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="first_name"><h4>First name</h4></label>*/
/*                                     <input type="text" class="form-control" name="first_name" id="first_name"*/
/*                                            placeholder="first name" title="enter your first name if any.">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="last_name"><h4>Last name</h4></label>*/
/*                                     <input type="text" class="form-control" name="last_name" id="last_name"*/
/*                                            placeholder="last name" title="enter your last name if any.">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="phone"><h4>Phone</h4></label>*/
/*                                     <input type="text" class="form-control" name="phone" id="phone"*/
/*                                            placeholder="enter phone" title="enter your phone number if any.">*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-6">*/
/*                                     <label for="mobile"><h4>Mobile</h4></label>*/
/*                                     <input type="text" class="form-control" name="mobile" id="mobile"*/
/*                                            placeholder="enter mobile number" title="enter your mobile number if any.">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="email"><h4>Email</h4></label>*/
/*                                     <input type="email" class="form-control" name="email" id="email"*/
/*                                            placeholder="you@email.com" title="enter your email.">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="email"><h4>Location</h4></label>*/
/*                                     <input type="email" class="form-control" id="location" placeholder="somewhere"*/
/*                                            title="enter a location">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="password"><h4>Password</h4></label>*/
/*                                     <input type="password" class="form-control" name="password" id="password"*/
/*                                            placeholder="password" title="enter your password.">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/* */
/*                                 <div class="col-xs-6">*/
/*                                     <label for="password2"><h4>Verify</h4></label>*/
/*                                     <input type="password" class="form-control" name="password2" id="password2"*/
/*                                            placeholder="password2" title="enter your password2.">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-xs-12">*/
/*                                     <br>*/
/*                                     <button class="btn  btn-success" type="submit"><i*/
/*                                                 class="glyphicon glyphicon-ok-sign"></i> Save*/
/*                                     </button>*/
/*                                     <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset*/
/*                                     </button>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <!--/tab-pane-->*/
/*                 </div>*/
/*                 <!--/tab-content-->*/
/* */
/*             </div>*/
/*             <!--/col-9-->*/
/*         </div>*/
/*         <!--/row-->*/
/*     </div>*/
/* {% endblock %}*/
/* */
