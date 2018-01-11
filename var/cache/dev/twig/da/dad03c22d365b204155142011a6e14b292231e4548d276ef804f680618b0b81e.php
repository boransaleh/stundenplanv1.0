<?php

/* @SgDatatables/datatable/multiselect_actions.html.twig */
class __TwigTemplate_46ebd7d1c4adf67b9d941606a23055899aa9f8442c0b11e9e02cd85f40f7896d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eebe9580dc945ecbfde3f950c42a57d106084d5e2a62656a162ae66e851975ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebe9580dc945ecbfde3f950c42a57d106084d5e2a62656a162ae66e851975ba->enter($__internal_eebe9580dc945ecbfde3f950c42a57d106084d5e2a62656a162ae66e851975ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/multiselect_actions.html.twig"));

        $__internal_f9a16c82fc4e2fdd2444f1ace20f4e85a3469c5dcd50eefb05894aa2de88d29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a16c82fc4e2fdd2444f1ace20f4e85a3469c5dcd50eefb05894aa2de88d29b->enter($__internal_f9a16c82fc4e2fdd2444f1ace20f4e85a3469c5dcd50eefb05894aa2de88d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SgDatatables/datatable/multiselect_actions.html.twig"));

        // line 9
        $context["macros"] = $this;
        // line 10
        echo "
";
        // line 22
        echo "
";
        // line 28
        echo "
";
        // line 38
        echo "
";
        // line 54
        echo "
";
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
            // line 63
            echo "        ";
            if (($this->getAttribute($context["action"], "callRenderIfClosure", array()) === true)) {
                // line 64
                echo "            ";
                if (($this->getAttribute($context["action"], "button", array()) === false)) {
                    // line 65
                    echo "                ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
                <a ";
                    // line 66
                    echo $context["macros"]->gethref($context["action"], $this->getAttribute(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                    ";
                    // line 67
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
                </a>
                ";
                    // line 69
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
            ";
                } else {
                    // line 71
                    echo "                ";
                    echo $this->getAttribute($context["action"], "startHtml", array());
                    echo "
                <button type=\"button\" ";
                    // line 72
                    echo $context["macros"]->getvalue($this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), $context["actionKey"], array(), "array"));
                    echo " ";
                    echo $context["macros"]->getattributes($context["action"]);
                    echo " ";
                    echo $context["macros"]->getconfirm_dialog($context["action"]);
                    echo ">
                    ";
                    // line 73
                    echo $context["macros"]->getlink_title($context["action"]);
                    echo "
                </button>
                ";
                    // line 75
                    echo $this->getAttribute($context["action"], "endHtml", array());
                    echo "
            ";
                }
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["multiselect_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 80
        echo "
";
        // line 82
        if ((null === ($context["dom_id"] ?? $this->getContext($context, "dom_id")))) {
            // line 83
            echo "    \$(\"#sg-datatables-";
            echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
            echo "-multiselect-actions\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? $this->getContext($context, "multiselect_actions")), "js"), "html", null, true);
            echo "\");
";
        } else {
            // line 85
            echo "    \$(\"#";
            echo twig_escape_filter($this->env, ($context["dom_id"] ?? $this->getContext($context, "dom_id")), "html", null, true);
            echo "\").append(\"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["multiselect_actions"] ?? $this->getContext($context, "multiselect_actions")), "js"), "html", null, true);
            echo "\");
";
        }
        // line 87
        echo "
";
        // line 89
        echo "function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-";
        // line 90
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-";
        // line 91
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-";
        // line 92
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkall:checkbox\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
    }
}

";
        // line 107
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody\").on(\"click\", \"tr\", function () {
    ";
        // line 109
        echo "    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    ";
        // line 114
        echo "    \$(this).find(\"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

";
        // line 122
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

";
        // line 128
        echo "\$(\"#sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "\").on(\"click\", \"input.sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-";
        // line 129
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-";
        // line 131
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo " tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
});

";
        // line 143
        echo "\$(\".sg-datatables-";
        echo twig_escape_filter($this->env, ($context["datatable_name"] ?? $this->getContext($context, "datatable_name")), "html", null, true);
        echo "-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = ";
        // line 157
        echo twig_escape_filter($this->env, ($context["pipeline"] ?? $this->getContext($context, "pipeline")), "html", null, true);
        echo ";

        ";
        // line 159
        $context["token"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("multiselect");
        // line 160
        echo "
        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                type: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"";
        // line 169
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.selectError", array(), "messages"), "html", null, true);
        echo "\");
    }
});
";
        
        $__internal_eebe9580dc945ecbfde3f950c42a57d106084d5e2a62656a162ae66e851975ba->leave($__internal_eebe9580dc945ecbfde3f950c42a57d106084d5e2a62656a162ae66e851975ba_prof);

        
        $__internal_f9a16c82fc4e2fdd2444f1ace20f4e85a3469c5dcd50eefb05894aa2de88d29b->leave($__internal_f9a16c82fc4e2fdd2444f1ace20f4e85a3469c5dcd50eefb05894aa2de88d29b_prof);

    }

    // line 11
    public function getlink_title($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_96596b683e312d3903c438ada74bd168f499c6ef9eefaada7178cffcd049707a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_96596b683e312d3903c438ada74bd168f499c6ef9eefaada7178cffcd049707a->enter($__internal_96596b683e312d3903c438ada74bd168f499c6ef9eefaada7178cffcd049707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            $__internal_587282aa5c93ec8cfc33d4e033ad00ac87ac17d0d3ca2ffb0d7effe53331472f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_587282aa5c93ec8cfc33d4e033ad00ac87ac17d0d3ca2ffb0d7effe53331472f->enter($__internal_587282aa5c93ec8cfc33d4e033ad00ac87ac17d0d3ca2ffb0d7effe53331472f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_title"));

            // line 12
            echo "    ";
            if ((($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()) === null) && ($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()) === null))) {
                // line 13
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                    // line 14
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), "html", null, true);
                    echo "
        ";
                } else {
                    // line 16
                    echo "            null
        ";
                }
                // line 18
                echo "    ";
            } else {
                // line 19
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
                echo "\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), "html", null, true);
                echo "
    ";
            }
            
            $__internal_587282aa5c93ec8cfc33d4e033ad00ac87ac17d0d3ca2ffb0d7effe53331472f->leave($__internal_587282aa5c93ec8cfc33d4e033ad00ac87ac17d0d3ca2ffb0d7effe53331472f_prof);

            
            $__internal_96596b683e312d3903c438ada74bd168f499c6ef9eefaada7178cffcd049707a->leave($__internal_96596b683e312d3903c438ada74bd168f499c6ef9eefaada7178cffcd049707a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getattributes($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8dd63d7a0792ebad59426d5f46ef0d2d90027e61e02d9edf71d27e6c9ab96385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_8dd63d7a0792ebad59426d5f46ef0d2d90027e61e02d9edf71d27e6c9ab96385->enter($__internal_8dd63d7a0792ebad59426d5f46ef0d2d90027e61e02d9edf71d27e6c9ab96385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_fec06fe69317623a6fbdf5e76c0a02328cf25e64841a0f2fccfd22bae3c16aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fec06fe69317623a6fbdf5e76c0a02328cf25e64841a0f2fccfd22bae3c16aca->enter($__internal_fec06fe69317623a6fbdf5e76c0a02328cf25e64841a0f2fccfd22bae3c16aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "attributes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 25
                echo "        ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_fec06fe69317623a6fbdf5e76c0a02328cf25e64841a0f2fccfd22bae3c16aca->leave($__internal_fec06fe69317623a6fbdf5e76c0a02328cf25e64841a0f2fccfd22bae3c16aca_prof);

            
            $__internal_8dd63d7a0792ebad59426d5f46ef0d2d90027e61e02d9edf71d27e6c9ab96385->leave($__internal_8dd63d7a0792ebad59426d5f46ef0d2d90027e61e02d9edf71d27e6c9ab96385_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getconfirm_dialog($__action__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6c9a6c1c768454f3964580a29bceef996f895c8109ae464c3b201f4123ac834b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_6c9a6c1c768454f3964580a29bceef996f895c8109ae464c3b201f4123ac834b->enter($__internal_6c9a6c1c768454f3964580a29bceef996f895c8109ae464c3b201f4123ac834b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            $__internal_cadedaf41ec23182f733e9ef83fd25f21383ec5a4380e61cfb946e2393529418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cadedaf41ec23182f733e9ef83fd25f21383ec5a4380e61cfb946e2393529418->enter($__internal_cadedaf41ec23182f733e9ef83fd25f21383ec5a4380e61cfb946e2393529418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "confirm_dialog"));

            // line 30
            echo "    ";
            if (($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirm", array()) === true)) {
                // line 31
                echo "        ";
                if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()) === null)) {
                    // line 32
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "confirmMessage", array()), "html", null, true);
                    echo "\"
        ";
                } else {
                    // line 34
                    echo "            data-message=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sg.datatables.confirmMessage", array(), "messages"), "html", null, true);
                    echo "\"
        ";
                }
                // line 36
                echo "    ";
            }
            
            $__internal_cadedaf41ec23182f733e9ef83fd25f21383ec5a4380e61cfb946e2393529418->leave($__internal_cadedaf41ec23182f733e9ef83fd25f21383ec5a4380e61cfb946e2393529418_prof);

            
            $__internal_6c9a6c1c768454f3964580a29bceef996f895c8109ae464c3b201f4123ac834b->leave($__internal_6c9a6c1c768454f3964580a29bceef996f895c8109ae464c3b201f4123ac834b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gethref($__action__ = null, $__route_parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "action" => $__action__,
            "route_parameters" => $__route_parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_17bf6221e38f47145bc2ced15cc5a525800ec24d43df388ff29fd1e24256d639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_17bf6221e38f47145bc2ced15cc5a525800ec24d43df388ff29fd1e24256d639->enter($__internal_17bf6221e38f47145bc2ced15cc5a525800ec24d43df388ff29fd1e24256d639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            $__internal_93fc2511ebcc081ab67b68107e0164c89a2fe8aa6f2ce7a1072eda3dfbfad5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_93fc2511ebcc081ab67b68107e0164c89a2fe8aa6f2ce7a1072eda3dfbfad5d7->enter($__internal_93fc2511ebcc081ab67b68107e0164c89a2fe8aa6f2ce7a1072eda3dfbfad5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "href"));

            // line 40
            echo "    ";
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "routeParameters", array()) === null)) {
                // line 41
                echo "        ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "locale", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())))) {
                    // line 42
                    echo "            ";
                    if (twig_in_filter("_locale", twig_get_array_keys_filter(($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))))) {
                        // line 43
                        echo "                ";
                        $context["route_parameters"] = twig_array_merge(($context["route_parameters"] ?? $this->getContext($context, "route_parameters")), array("_locale" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array())));
                        // line 44
                        echo "            ";
                    }
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ( !($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()) === null)) {
                // line 49
                echo "        href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "route", array()), ($context["route_parameters"] ?? $this->getContext($context, "route_parameters"))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 51
                echo "        href=\"javascript:void(0);\"
    ";
            }
            
            $__internal_93fc2511ebcc081ab67b68107e0164c89a2fe8aa6f2ce7a1072eda3dfbfad5d7->leave($__internal_93fc2511ebcc081ab67b68107e0164c89a2fe8aa6f2ce7a1072eda3dfbfad5d7_prof);

            
            $__internal_17bf6221e38f47145bc2ced15cc5a525800ec24d43df388ff29fd1e24256d639->leave($__internal_17bf6221e38f47145bc2ced15cc5a525800ec24d43df388ff29fd1e24256d639_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getvalue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ee7baa6b53c8cf521386801d49b296487425d16530405cbd51b07e0536c1548f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ee7baa6b53c8cf521386801d49b296487425d16530405cbd51b07e0536c1548f->enter($__internal_ee7baa6b53c8cf521386801d49b296487425d16530405cbd51b07e0536c1548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            $__internal_178accb7fcc1b1190976c2a053d04062c0278dfc67e1071d7b222f9fc9ad74ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_178accb7fcc1b1190976c2a053d04062c0278dfc67e1071d7b222f9fc9ad74ed->enter($__internal_178accb7fcc1b1190976c2a053d04062c0278dfc67e1071d7b222f9fc9ad74ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "value"));

            // line 56
            echo "    ";
            if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
                // line 57
                echo "        value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_178accb7fcc1b1190976c2a053d04062c0278dfc67e1071d7b222f9fc9ad74ed->leave($__internal_178accb7fcc1b1190976c2a053d04062c0278dfc67e1071d7b222f9fc9ad74ed_prof);

            
            $__internal_ee7baa6b53c8cf521386801d49b296487425d16530405cbd51b07e0536c1548f->leave($__internal_ee7baa6b53c8cf521386801d49b296487425d16530405cbd51b07e0536c1548f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SgDatatables/datatable/multiselect_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 57,  566 => 56,  548 => 55,  525 => 51,  519 => 49,  517 => 48,  514 => 47,  511 => 46,  508 => 45,  505 => 44,  502 => 43,  499 => 42,  496 => 41,  493 => 40,  474 => 39,  452 => 36,  446 => 34,  440 => 32,  437 => 31,  434 => 30,  416 => 29,  386 => 25,  381 => 24,  363 => 23,  336 => 19,  333 => 18,  329 => 16,  323 => 14,  320 => 13,  317 => 12,  299 => 11,  285 => 184,  267 => 169,  256 => 160,  254 => 159,  249 => 157,  231 => 143,  217 => 131,  212 => 129,  205 => 128,  194 => 122,  183 => 114,  177 => 109,  172 => 107,  153 => 92,  147 => 91,  141 => 90,  138 => 89,  135 => 87,  127 => 85,  119 => 83,  117 => 82,  114 => 80,  107 => 78,  104 => 77,  99 => 75,  94 => 73,  86 => 72,  81 => 71,  76 => 69,  71 => 67,  63 => 66,  58 => 65,  55 => 64,  52 => 63,  47 => 62,  45 => 61,  42 => 60,  39 => 54,  36 => 38,  33 => 28,  30 => 22,  27 => 10,  25 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # This file is part of the SgDatatablesBundle package.
 #
 # (c) stwe <https://github.com/stwe/DatatablesBundle>
 #
 # For the full copyright and license information, please view the LICENSE
 # file that was distributed with this source code.
 #}
{% import _self as macros %}

{% macro link_title(action) %}
    {% if action.label is same as(null) and action.icon is same as(null) %}
        {% if action.route is not same as(null) %}
            {{ action.route }}
        {% else %}
            null
        {% endif %}
    {% else %}
        <span class=\"{{ action.icon }}\"></span> {{ action.label }}
    {% endif %}
{% endmacro %}

{% macro attributes(action) %}
    {% for key, value in action.attributes %}
        {{ key }}=\"{{ value }}\"
    {% endfor %}
{% endmacro %}

{% macro confirm_dialog(action) %}
    {% if action.confirm is same as(true) %}
        {% if action.confirmMessage is not same as(null) %}
            data-message=\"{{ action.confirmMessage }}\"
        {% else %}
            data-message=\"{{ 'sg.datatables.confirmMessage'|trans({}, 'messages') }}\"
        {% endif %}
    {% endif %}
{% endmacro %}

{% macro href(action, route_parameters) %}
    {% if action.routeParameters is not same as(null) %}
        {% if app.request.locale is defined and app.request.locale is not null %}
            {% if '_locale' in route_parameters|keys %}
                {% set route_parameters = route_parameters|merge({ '_locale': app.request.locale }) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if action.route is not same as(null) %}
        href=\"{{ path(action.route, route_parameters) }}\"
    {% else %}
        href=\"javascript:void(0);\"
    {% endif %}
{% endmacro %}

{% macro value(value) %}
    {% if value is not null %}
        value=\"{{ value }}\"
    {% endif %}
{% endmacro %}

{% set multiselect_actions %}
    {% for actionKey, action in actions %}
        {% if action.callRenderIfClosure is same as(true) %}
            {% if action.button is same as(false) %}
                {{ action.startHtml|raw }}
                <a {{ macros.href(action, route_parameters[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </a>
                {{ action.endHtml|raw }}
            {% else %}
                {{ action.startHtml|raw }}
                <button type=\"button\" {{ macros.value(values[actionKey]) }} {{ macros.attributes(action) }} {{ macros.confirm_dialog(action) }}>
                    {{ macros.link_title(action) }}
                </button>
                {{ action.endHtml|raw }}
            {% endif %}
        {% endif %}
    {% endfor %}
{% endset %}

{# add multiselect actions #}
{% if dom_id is null %}
    \$(\"#sg-datatables-{{ datatable_name }}-multiselect-actions\").append(\"{{ multiselect_actions|e('js') }}\");
{% else %}
    \$(\"#{{ dom_id }}\").append(\"{{ multiselect_actions|e('js') }}\");
{% endif %}

{# function to update the check-all-checkbox #}
function updateCheckAll() {
    var cbox_all = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\");
    var cbox_checked = \$(\"#sg-datatables-{{ datatable_name }} tbody input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox:checked\");
    var cbox_checkall = \$(\"#sg-datatables-{{ datatable_name }} input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\");

    if(cbox_checked.length === 0){
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', false);
    } else if (cbox_checked.length === cbox_all.length){
        cbox_checkall.prop('checked', true);
        cbox_checkall.prop('indeterminate', false);
    } else {
        cbox_checkall.prop('checked', false);
        cbox_checkall.prop('indeterminate', true);
    }
}

{# handle row <tr> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"tr\", function () {
    {# add 'selected' class #}
    if (\$(this).find(\"input\").length) {
        \$(this).toggleClass(\"selected\");
    }

    {# set !checked for the row checkbox #}
    \$(this).find(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\").each(function() {
        this.checked = !this.checked;
    });

    updateCheckAll();
});

{# handle checkbox <input> click #}
\$(\"#sg-datatables-{{ datatable_name }} tbody\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox:checkbox\", function () {
    this.checked = !this.checked;
    updateCheckAll();
});

{# select/unselect all checkboxes #}
\$(\"#sg-datatables-{{ datatable_name }}\").on(\"click\", \"input.sg-datatables-{{ datatable_name }}-multiselect-checkall:checkbox\", function () {
    \$(\"input.sg-datatables-{{ datatable_name }}-multiselect-checkbox\").prop('checked', \$(this).prop(\"checked\"));
    var propCheck = \$(this).prop(\"checked\");
    \$(\"#sg-datatables-{{ datatable_name }} tbody tr\").each(function(){
        if (\$(this).find(\"input\").length) {
            if (true == propCheck) {
                \$(this).addClass(\"selected\");
            } else {
                \$(this).removeClass(\"selected\");
            }
        }
    });
});

{# handle multiselect action click #}
\$(\".sg-datatables-{{ datatable_name }}-multiselect-action\").on(\"click\", function(event) {
    event.preventDefault();

    if (oTable.rows(\".selected\").data().length > 0) {
        if (\$(this).data(\"message\")) {
            if (!confirm(\$(this).data(\"message\"))) {
                return;
            }
        }

        var items = \$.map(oTable.rows(\".selected\").data(), function (i) {
            return i
        });

        var pipeline = {{ pipeline }};

        {% set token = csrf_token('multiselect') %}

        var url = \$(this).attr(\"href\");
        if (url != null) {
            \$.ajax({
                url: url,
                type: \"POST\",
                cache: false,
                data: {
                    'data': items,
                    'token': \"{{ token }}\"
                },
                success: function(msg) {
                    if (pipeline > 0) {
                        oTable.clearPipeline().draw();
                    } else {
                        oTable.draw();
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    console.log(XMLHttpRequest + ' ' + textStatus + ' '  + errorThrown);
                }
            })
        }
    } else {
        alert(\"{{ 'sg.datatables.selectError'|trans({}, 'messages') }}\");
    }
});
", "@SgDatatables/datatable/multiselect_actions.html.twig", "C:\\Apache24\\htdocs\\vendor\\sg\\datatablesbundle\\Resources\\views\\datatable\\multiselect_actions.html.twig");
    }
}
