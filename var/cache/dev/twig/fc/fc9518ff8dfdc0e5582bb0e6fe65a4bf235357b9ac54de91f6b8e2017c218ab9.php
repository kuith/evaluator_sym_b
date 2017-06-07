<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_883b40e6dae148de9aef3f74b4a262239125c0b5157dc6a49a8f6a9ffcf5ac63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69675aad534a8de4503eac2d0a87a6f823b34828edceddf3242fe423ad4cb787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69675aad534a8de4503eac2d0a87a6f823b34828edceddf3242fe423ad4cb787->enter($__internal_69675aad534a8de4503eac2d0a87a6f823b34828edceddf3242fe423ad4cb787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_73e4510b1a4a58881ba7e9ac471b511fcb5a35ad77d85bb96994c068e5dd2a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e4510b1a4a58881ba7e9ac471b511fcb5a35ad77d85bb96994c068e5dd2a38->enter($__internal_73e4510b1a4a58881ba7e9ac471b511fcb5a35ad77d85bb96994c068e5dd2a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69675aad534a8de4503eac2d0a87a6f823b34828edceddf3242fe423ad4cb787->leave($__internal_69675aad534a8de4503eac2d0a87a6f823b34828edceddf3242fe423ad4cb787_prof);

        
        $__internal_73e4510b1a4a58881ba7e9ac471b511fcb5a35ad77d85bb96994c068e5dd2a38->leave($__internal_73e4510b1a4a58881ba7e9ac471b511fcb5a35ad77d85bb96994c068e5dd2a38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_737a48cb30e6ed892935ee6d34885a8f9a23dbaba97a06a0d5c22b3dbbfcc867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737a48cb30e6ed892935ee6d34885a8f9a23dbaba97a06a0d5c22b3dbbfcc867->enter($__internal_737a48cb30e6ed892935ee6d34885a8f9a23dbaba97a06a0d5c22b3dbbfcc867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb72443d5226c44f47a659cfe09575c97aca3cc6029e7b2827e182f45a1f9927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb72443d5226c44f47a659cfe09575c97aca3cc6029e7b2827e182f45a1f9927->enter($__internal_bb72443d5226c44f47a659cfe09575c97aca3cc6029e7b2827e182f45a1f9927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb72443d5226c44f47a659cfe09575c97aca3cc6029e7b2827e182f45a1f9927->leave($__internal_bb72443d5226c44f47a659cfe09575c97aca3cc6029e7b2827e182f45a1f9927_prof);

        
        $__internal_737a48cb30e6ed892935ee6d34885a8f9a23dbaba97a06a0d5c22b3dbbfcc867->leave($__internal_737a48cb30e6ed892935ee6d34885a8f9a23dbaba97a06a0d5c22b3dbbfcc867_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f14fa2981962732f10717845f09eedd5f2c7a8e54fdac57be04c06942a9f1ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14fa2981962732f10717845f09eedd5f2c7a8e54fdac57be04c06942a9f1ac3->enter($__internal_f14fa2981962732f10717845f09eedd5f2c7a8e54fdac57be04c06942a9f1ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df8f07efa732b43d0e883f3cb44cb9edf026e9df38c28138289436201dd0b18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8f07efa732b43d0e883f3cb44cb9edf026e9df38c28138289436201dd0b18b->enter($__internal_df8f07efa732b43d0e883f3cb44cb9edf026e9df38c28138289436201dd0b18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df8f07efa732b43d0e883f3cb44cb9edf026e9df38c28138289436201dd0b18b->leave($__internal_df8f07efa732b43d0e883f3cb44cb9edf026e9df38c28138289436201dd0b18b_prof);

        
        $__internal_f14fa2981962732f10717845f09eedd5f2c7a8e54fdac57be04c06942a9f1ac3->leave($__internal_f14fa2981962732f10717845f09eedd5f2c7a8e54fdac57be04c06942a9f1ac3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80891b43c80f23c0f9a343ead3218aa2c86121503ec7395ea9e2f777792db629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80891b43c80f23c0f9a343ead3218aa2c86121503ec7395ea9e2f777792db629->enter($__internal_80891b43c80f23c0f9a343ead3218aa2c86121503ec7395ea9e2f777792db629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ea1a63e86db7c4cdc984582a080e14e73b4857f94c4e0d5562ab1acd01130860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1a63e86db7c4cdc984582a080e14e73b4857f94c4e0d5562ab1acd01130860->enter($__internal_ea1a63e86db7c4cdc984582a080e14e73b4857f94c4e0d5562ab1acd01130860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea1a63e86db7c4cdc984582a080e14e73b4857f94c4e0d5562ab1acd01130860->leave($__internal_ea1a63e86db7c4cdc984582a080e14e73b4857f94c4e0d5562ab1acd01130860_prof);

        
        $__internal_80891b43c80f23c0f9a343ead3218aa2c86121503ec7395ea9e2f777792db629->leave($__internal_80891b43c80f23c0f9a343ead3218aa2c86121503ec7395ea9e2f777792db629_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\evaluator_sym\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
