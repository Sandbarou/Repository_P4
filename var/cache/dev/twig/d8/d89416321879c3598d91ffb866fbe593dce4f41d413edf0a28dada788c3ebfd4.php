<?php

/* OCLouvreBundle:Louvre:index.html.twig */
class __TwigTemplate_d7ee2e40e8f87737e8f3159d86a53cbcc3153da86c5bdec3c8286f7bb7e4b287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'form_part' => array($this, 'block_form_part'),
            'body' => array($this, 'block_body'),
            'hidden_part' => array($this, 'block_hidden_part'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ff388eea119cede62efbd0716ec366c3a62ef2301ba80a4e962584c2b0f8649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff388eea119cede62efbd0716ec366c3a62ef2301ba80a4e962584c2b0f8649->enter($__internal_7ff388eea119cede62efbd0716ec366c3a62ef2301ba80a4e962584c2b0f8649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:index.html.twig"));

        $__internal_26b661785f56cca05f129085180a36fd2f49660cc4a2629ecf5c36e4904dfcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b661785f56cca05f129085180a36fd2f49660cc4a2629ecf5c36e4904dfcd1->enter($__internal_26b661785f56cca05f129085180a36fd2f49660cc4a2629ecf5c36e4904dfcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCLouvreBundle:Louvre:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <title>Site de réservation du Musée du Louvre</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
    </head>
    
<body>
  <nav class=\"white\" role=\"navigation\">
    <div class=\"nav-wrapper container\">
      <a id=\"logo-container\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\" class=\"brand-logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/images/louvre2.jpg"), "html", null, true);
        echo "\" alt=\"Louvre logo\"></a>
      <ul id=\"menuup\" class=\"right hide-on-med-and-down\">
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\">ACCUEIL</a></li>  
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_date");
        echo "\">COMMANDER UN TICKET</a></li>
      </ul>
        
      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_index");
        echo "\">Accueil</a></li>  
        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_date");
        echo "\">Commander un ticket</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

    
  <div id=\"index-banner\" class=\"parallax-container\">
    <div class=\"section no-pad-bot\">
      <div class=\"container\">
        <br><br>
        <h1 class=\"header center teal-text text-lighten-2\">Musée du Louvre</h1>
        <div class=\"row center\">
          <h5 class=\"header col s12 light\"><p>Bienvenue sur le site de réservation du Musée du Louvre !</p>Vous pouvez acheter vos billets directement en ligne pour éviter l'attente à l'entrée du musée.<br /> Pour obtenir plus d'informations sur le <a href=\"http://www.louvre.fr\">Musée du Louvre</a>, visitez notre site internet officiel.</h5>
        </div>

        <br><br>

      </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/images/image1.jpeg"), "html", null, true);
        echo "\" title=\"La Joconde - de Vinci\" alt=\"La Joconde - de Vinci\"></div>
  </div>

<div class=\"container\">
";
        // line 54
        $this->displayBlock('menu', $context, $blocks);
        // line 57
        echo "</div>    

  <div class=\"container\">
    <div class=\"section\">
      <!--   Icon Section   -->
      <div class=\"row\">
                      ";
        // line 63
        $this->displayBlock('form_part', $context, $blocks);
        // line 115
        echo "    
      </div>
    </div>
  </div>

   <div class=\"container\">
    <div class=\"section\">
      <!--   Icon Section   -->
      <div class=\"row\">
";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "      </div>
    </div>
  </div>
    
";
        // line 135
        $this->displayBlock('hidden_part', $context, $blocks);
        // line 150
        echo "
  <div class=\"parallax-container valign-wrapper\">
    <div class=\"section no-pad-bot\">
      <div class=\"container\">
        <div class=\"row center\">
          <h5 class=\"header col s12 light\"></h5>
        </div>
      </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/images/image2.jpg"), "html", null, true);
        echo "\" title=\"Les Noces de Cana - Veronese\" alt=\"Les Noces de Cana - Veronese\"></div>
  </div>
      

  <footer class=\"page-footer teal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l12 s12\">
          <h5 class=\"white-text\">Le Louvre</h5>
          <p class=\"grey-text text-lighten-4\">Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre. Il est le plus grand des musées d'art du monde par sa surface d'exposition de 72 735 m27. Ses collections comprennent près de 460 000 œuvres. Celles-ci présentent l'art occidental du Moyen Âge à 1848, ceux des civilisations antiques qui l'ont précédé et influencé (orientales, égyptienne, grecque, étrusque et romaine), les arts des premiers chrétiens et de l'Islam.</p>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      <a class=\"brown-text text-lighten-3\" href=\"http://www.louvre.fr\">Musée du Louvre</a> &nbsp; © ";
        // line 174
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Tous droits réservés.
      </div>
    </div>
  </footer> 
      
";
        // line 179
        $this->displayBlock('javascripts', $context, $blocks);
        // line 186
        echo "  
      
      </body>
</html>";
        
        $__internal_7ff388eea119cede62efbd0716ec366c3a62ef2301ba80a4e962584c2b0f8649->leave($__internal_7ff388eea119cede62efbd0716ec366c3a62ef2301ba80a4e962584c2b0f8649_prof);

        
        $__internal_26b661785f56cca05f129085180a36fd2f49660cc4a2629ecf5c36e4904dfcd1->leave($__internal_26b661785f56cca05f129085180a36fd2f49660cc4a2629ecf5c36e4904dfcd1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a5f6f1f2b2dd5d9f57c69cafe438d5be9b35eba6608e4cf6a9da9c044ed23bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5f6f1f2b2dd5d9f57c69cafe438d5be9b35eba6608e4cf6a9da9c044ed23bb->enter($__internal_9a5f6f1f2b2dd5d9f57c69cafe438d5be9b35eba6608e4cf6a9da9c044ed23bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2a01e6cb074d1709223180a2bca19787d1aac0d618371472ff3e7b3b6ecdf18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a01e6cb074d1709223180a2bca19787d1aac0d618371472ff3e7b3b6ecdf18->enter($__internal_e2a01e6cb074d1709223180a2bca19787d1aac0d618371472ff3e7b3b6ecdf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "     
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">    
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/css/materialize.min.css"), "html", null, true);
        echo "\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/css/materialize.css"), "html", null, true);
        echo "\"  media=\"screen,projection\"/>
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/css/style.css"), "html", null, true);
        echo "\" media=\"screen,projection\"/>
        ";
        
        $__internal_e2a01e6cb074d1709223180a2bca19787d1aac0d618371472ff3e7b3b6ecdf18->leave($__internal_e2a01e6cb074d1709223180a2bca19787d1aac0d618371472ff3e7b3b6ecdf18_prof);

        
        $__internal_9a5f6f1f2b2dd5d9f57c69cafe438d5be9b35eba6608e4cf6a9da9c044ed23bb->leave($__internal_9a5f6f1f2b2dd5d9f57c69cafe438d5be9b35eba6608e4cf6a9da9c044ed23bb_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2aaae69380e8c8cf0c236d3bc444d8201c1a9d1a3570dc1f4110ab7c5e739458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aaae69380e8c8cf0c236d3bc444d8201c1a9d1a3570dc1f4110ab7c5e739458->enter($__internal_2aaae69380e8c8cf0c236d3bc444d8201c1a9d1a3570dc1f4110ab7c5e739458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f301f7382d49928c1fa2f9ed9b4bba169a3b374cc8365936fbb070e7b180699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f301f7382d49928c1fa2f9ed9b4bba169a3b374cc8365936fbb070e7b180699->enter($__internal_5f301f7382d49928c1fa2f9ed9b4bba169a3b374cc8365936fbb070e7b180699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo "    

";
        
        $__internal_5f301f7382d49928c1fa2f9ed9b4bba169a3b374cc8365936fbb070e7b180699->leave($__internal_5f301f7382d49928c1fa2f9ed9b4bba169a3b374cc8365936fbb070e7b180699_prof);

        
        $__internal_2aaae69380e8c8cf0c236d3bc444d8201c1a9d1a3570dc1f4110ab7c5e739458->leave($__internal_2aaae69380e8c8cf0c236d3bc444d8201c1a9d1a3570dc1f4110ab7c5e739458_prof);

    }

    // line 63
    public function block_form_part($context, array $blocks = array())
    {
        $__internal_0063166260b7f8d30dfa4d069b0e81cc15c32dc2de99b4bf166cf102cbac2da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0063166260b7f8d30dfa4d069b0e81cc15c32dc2de99b4bf166cf102cbac2da1->enter($__internal_0063166260b7f8d30dfa4d069b0e81cc15c32dc2de99b4bf166cf102cbac2da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        $__internal_71ab3259f804c72807e8872d14f4fd2e0031dcce279dce4f1e177c52b368dbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ab3259f804c72807e8872d14f4fd2e0031dcce279dce4f1e177c52b368dbbd->enter($__internal_71ab3259f804c72807e8872d14f4fd2e0031dcce279dce4f1e177c52b368dbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_part"));

        echo "  
        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">flash_on</i></h2>
            <h5 class=\"center brown-text\">Tarifs</h5>
     
              <p class=\"light\">
                <table>
                    <caption class=\"center brown-text\"><i>Gratuit pour les moins de 4 ans</i></caption>
                    <tr>
                        <td><b>Plein tarif</b></td>
                        <td>à partir de 12 ans</td>
                        <td>16 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif senior</b></td>
                        <td>à partir de 60 ans</td>
                        <td>12 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif enfant</b></td>
                        <td>de 4 à 12 ans</td>
                        <td>8 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif réduit</b></td>
                        <td>avec justificatifs (étudiant, militaire...)</td>
                        <td>10 €</td>
                    </tr>
                </table>    
              </p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">group</i></h2>
            <h5 class=\"center brown-text\">Jours d'ouverture</h5>

            <p class=\"light\"><br />Le Musée du Louvre est ouvert tous les jours sauf le mardi, le 1er mai, le 1er novembre et le 25 décembre. <br /><br />Il n'est pas possible de commander des tickets en ligne pour les dimanches et les jours fériés.</p>
              
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">settings</i></h2>
            <h5 class=\"center brown-text\">Paiement sécurisé</h5>

            <p class=\"light\"><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus.</p>
          </div>
        </div>
        ";
        
        $__internal_71ab3259f804c72807e8872d14f4fd2e0031dcce279dce4f1e177c52b368dbbd->leave($__internal_71ab3259f804c72807e8872d14f4fd2e0031dcce279dce4f1e177c52b368dbbd_prof);

        
        $__internal_0063166260b7f8d30dfa4d069b0e81cc15c32dc2de99b4bf166cf102cbac2da1->leave($__internal_0063166260b7f8d30dfa4d069b0e81cc15c32dc2de99b4bf166cf102cbac2da1_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_6733572155fd95fb3a32b7daf2d5aebd94037cc42be7a8747c4330811e02cd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6733572155fd95fb3a32b7daf2d5aebd94037cc42be7a8747c4330811e02cd6d->enter($__internal_6733572155fd95fb3a32b7daf2d5aebd94037cc42be7a8747c4330811e02cd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99cf71b5b275881f8851367b974f77322fe3830ae83946e72a422e4c92a50dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cf71b5b275881f8851367b974f77322fe3830ae83946e72a422e4c92a50dc7->enter($__internal_99cf71b5b275881f8851367b974f77322fe3830ae83946e72a422e4c92a50dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
  <div class=\"parallax-container-1 valign-wrapper\">

      <h5 id=\"ticket_order\"><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_louvre_date");
        echo "\">COMMANDER UN TICKET</a></h5>

  </div>
";
        
        $__internal_99cf71b5b275881f8851367b974f77322fe3830ae83946e72a422e4c92a50dc7->leave($__internal_99cf71b5b275881f8851367b974f77322fe3830ae83946e72a422e4c92a50dc7_prof);

        
        $__internal_6733572155fd95fb3a32b7daf2d5aebd94037cc42be7a8747c4330811e02cd6d->leave($__internal_6733572155fd95fb3a32b7daf2d5aebd94037cc42be7a8747c4330811e02cd6d_prof);

    }

    // line 135
    public function block_hidden_part($context, array $blocks = array())
    {
        $__internal_bd7b3f69d25a240d30f15621ef291354b3b5be5ac8618bf60eb3b4d6391a6a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7b3f69d25a240d30f15621ef291354b3b5be5ac8618bf60eb3b4d6391a6a7c->enter($__internal_bd7b3f69d25a240d30f15621ef291354b3b5be5ac8618bf60eb3b4d6391a6a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        $__internal_e8745b7f2f4a54768ee4e904ea5b8030428dd8d8159378d1a572cd76ed0ca3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8745b7f2f4a54768ee4e904ea5b8030428dd8d8159378d1a572cd76ed0ca3a3->enter($__internal_e8745b7f2f4a54768ee4e904ea5b8030428dd8d8159378d1a572cd76ed0ca3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_part"));

        echo " 
  <div class=\"container\">
    <div class=\"section\">

      <div class=\"row\">
        <div class=\"col s12 center\">
          <h3><i class=\"mdi-content-send brown-text\"></i></h3>
          <h4>A propos du Louvre</h4>
          <p class=\"left-align light\">Situé dans le 1er arrondissement de Paris, sur la rive droite entre la Seine et la rue de Rivoli, le musée se signale par la pyramide de verre de son hall d'accueil, érigée en 1989 dans la cour Napoléon et qui en est devenue emblématique, tandis que la statue équestre de Louis XIV constitue le point de départ de l'axe historique parisien. Avec environ neuf millions de visiteurs annuels (depuis 2011), le Louvre est le musée le plus visité au monde, et le site culturel payant le plus visité de France. Parmi ses pièces les plus célèbres figurent La Joconde, la Vénus de Milo, Le Scribe accroupi, La Victoire de Samothrace et le Code de Hammurabi.<br /> Le Louvre possède une longue histoire de conservation artistique et historique, depuis l'Ancien Régime jusqu'à nos jours. À la suite du départ de Louis XIV pour le château de Versailles à la fin du xviie siècle, on y entrepose une partie des collections royales de tableaux et de sculptures antiques. Après avoir durant un siècle hébergé plusieurs académies, dont celle de peinture et de sculpture, ainsi que divers artistes logés par le roi, l'ancien palais royal est véritablement transformé sous la Révolution en « Muséum central des arts de la République ». Il ouvre en 1793 en exposant environ 660 œuvres, essentiellement issues des collections royales ou confisquées chez des nobles émigrés ou dans des églises.</p>
        </div>
      </div>

    </div>
  </div>
";
        
        $__internal_e8745b7f2f4a54768ee4e904ea5b8030428dd8d8159378d1a572cd76ed0ca3a3->leave($__internal_e8745b7f2f4a54768ee4e904ea5b8030428dd8d8159378d1a572cd76ed0ca3a3_prof);

        
        $__internal_bd7b3f69d25a240d30f15621ef291354b3b5be5ac8618bf60eb3b4d6391a6a7c->leave($__internal_bd7b3f69d25a240d30f15621ef291354b3b5be5ac8618bf60eb3b4d6391a6a7c_prof);

    }

    // line 179
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_617a1aa12edf7e69717f2fb8316592940c14ac2f79ddb28a4a66e3c1a53f5d57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617a1aa12edf7e69717f2fb8316592940c14ac2f79ddb28a4a66e3c1a53f5d57->enter($__internal_617a1aa12edf7e69717f2fb8316592940c14ac2f79ddb28a4a66e3c1a53f5d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b5b0e065458695e9f758fcf16b071eca76e59779d338c60e768532242b2e538f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b0e065458695e9f758fcf16b071eca76e59779d338c60e768532242b2e538f->enter($__internal_b5b0e065458695e9f758fcf16b071eca76e59779d338c60e768532242b2e538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 180
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/js/init.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/js/materialize.min.js"), "html", null, true);
        echo "\"></script>    
    <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/js/materialize.js"), "html", null, true);
        echo "\"></script> 
    <script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oclouvre/js/mon_js.js"), "html", null, true);
        echo "\"></script>   
";
        
        $__internal_b5b0e065458695e9f758fcf16b071eca76e59779d338c60e768532242b2e538f->leave($__internal_b5b0e065458695e9f758fcf16b071eca76e59779d338c60e768532242b2e538f_prof);

        
        $__internal_617a1aa12edf7e69717f2fb8316592940c14ac2f79ddb28a4a66e3c1a53f5d57->leave($__internal_617a1aa12edf7e69717f2fb8316592940c14ac2f79ddb28a4a66e3c1a53f5d57_prof);

    }

    public function getTemplateName()
    {
        return "OCLouvreBundle:Louvre:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 185,  391 => 184,  387 => 183,  383 => 182,  379 => 180,  370 => 179,  338 => 135,  324 => 127,  311 => 124,  241 => 63,  221 => 54,  209 => 14,  205 => 13,  201 => 12,  188 => 9,  175 => 186,  173 => 179,  165 => 174,  147 => 159,  136 => 150,  134 => 135,  128 => 131,  126 => 124,  115 => 115,  113 => 63,  105 => 57,  103 => 54,  96 => 50,  73 => 30,  69 => 29,  62 => 25,  58 => 24,  51 => 22,  43 => 16,  41 => 9,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <title>Site de réservation du Musée du Louvre</title>

        {% block stylesheets %}     
            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">    
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/oclouvre/css/materialize.min.css') }}\" />
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/oclouvre/css/materialize.css') }}\"  media=\"screen,projection\"/>
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('bundles/oclouvre/css/style.css') }}\" media=\"screen,projection\"/>
        {% endblock %}

    </head>
    
<body>
  <nav class=\"white\" role=\"navigation\">
    <div class=\"nav-wrapper container\">
      <a id=\"logo-container\" href=\"{{ path('oc_louvre_index') }}\" class=\"brand-logo\"><img src=\"{{ asset('bundles/oclouvre/images/louvre2.jpg') }}\" alt=\"Louvre logo\"></a>
      <ul id=\"menuup\" class=\"right hide-on-med-and-down\">
        <li><a href=\"{{ path('oc_louvre_index') }}\">ACCUEIL</a></li>  
        <li><a href=\"{{ path('oc_louvre_date') }}\">COMMANDER UN TICKET</a></li>
      </ul>
        
      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"{{ path('oc_louvre_index') }}\">Accueil</a></li>  
        <li><a href=\"{{ path('oc_louvre_date') }}\">Commander un ticket</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

    
  <div id=\"index-banner\" class=\"parallax-container\">
    <div class=\"section no-pad-bot\">
      <div class=\"container\">
        <br><br>
        <h1 class=\"header center teal-text text-lighten-2\">Musée du Louvre</h1>
        <div class=\"row center\">
          <h5 class=\"header col s12 light\"><p>Bienvenue sur le site de réservation du Musée du Louvre !</p>Vous pouvez acheter vos billets directement en ligne pour éviter l'attente à l'entrée du musée.<br /> Pour obtenir plus d'informations sur le <a href=\"http://www.louvre.fr\">Musée du Louvre</a>, visitez notre site internet officiel.</h5>
        </div>

        <br><br>

      </div>
    </div>
    <div class=\"parallax\"><img src=\"{{ asset('bundles/oclouvre/images/image1.jpeg') }}\" title=\"La Joconde - de Vinci\" alt=\"La Joconde - de Vinci\"></div>
  </div>

<div class=\"container\">
{% block menu %}    

{% endblock %}
</div>    

  <div class=\"container\">
    <div class=\"section\">
      <!--   Icon Section   -->
      <div class=\"row\">
                      {% block form_part %}  
        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">flash_on</i></h2>
            <h5 class=\"center brown-text\">Tarifs</h5>
     
              <p class=\"light\">
                <table>
                    <caption class=\"center brown-text\"><i>Gratuit pour les moins de 4 ans</i></caption>
                    <tr>
                        <td><b>Plein tarif</b></td>
                        <td>à partir de 12 ans</td>
                        <td>16 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif senior</b></td>
                        <td>à partir de 60 ans</td>
                        <td>12 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif enfant</b></td>
                        <td>de 4 à 12 ans</td>
                        <td>8 €</td>
                    </tr>
                    <tr>
                        <td><b>Tarif réduit</b></td>
                        <td>avec justificatifs (étudiant, militaire...)</td>
                        <td>10 €</td>
                    </tr>
                </table>    
              </p>
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">group</i></h2>
            <h5 class=\"center brown-text\">Jours d'ouverture</h5>

            <p class=\"light\"><br />Le Musée du Louvre est ouvert tous les jours sauf le mardi, le 1er mai, le 1er novembre et le 25 décembre. <br /><br />Il n'est pas possible de commander des tickets en ligne pour les dimanches et les jours fériés.</p>
              
          </div>
        </div>

        <div class=\"col s12 m4\">
          <div class=\"icon-block\">
            <h2 class=\"center brown-text\"><i class=\"material-icons\">settings</i></h2>
            <h5 class=\"center brown-text\">Paiement sécurisé</h5>

            <p class=\"light\"><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus.</p>
          </div>
        </div>
        {% endblock %}    
      </div>
    </div>
  </div>

   <div class=\"container\">
    <div class=\"section\">
      <!--   Icon Section   -->
      <div class=\"row\">
{% block body %}    
  <div class=\"parallax-container-1 valign-wrapper\">

      <h5 id=\"ticket_order\"><a href=\"{{ path('oc_louvre_date') }}\">COMMANDER UN TICKET</a></h5>

  </div>
{% endblock %}
      </div>
    </div>
  </div>
    
{% block hidden_part %} 
  <div class=\"container\">
    <div class=\"section\">

      <div class=\"row\">
        <div class=\"col s12 center\">
          <h3><i class=\"mdi-content-send brown-text\"></i></h3>
          <h4>A propos du Louvre</h4>
          <p class=\"left-align light\">Situé dans le 1er arrondissement de Paris, sur la rive droite entre la Seine et la rue de Rivoli, le musée se signale par la pyramide de verre de son hall d'accueil, érigée en 1989 dans la cour Napoléon et qui en est devenue emblématique, tandis que la statue équestre de Louis XIV constitue le point de départ de l'axe historique parisien. Avec environ neuf millions de visiteurs annuels (depuis 2011), le Louvre est le musée le plus visité au monde, et le site culturel payant le plus visité de France. Parmi ses pièces les plus célèbres figurent La Joconde, la Vénus de Milo, Le Scribe accroupi, La Victoire de Samothrace et le Code de Hammurabi.<br /> Le Louvre possède une longue histoire de conservation artistique et historique, depuis l'Ancien Régime jusqu'à nos jours. À la suite du départ de Louis XIV pour le château de Versailles à la fin du xviie siècle, on y entrepose une partie des collections royales de tableaux et de sculptures antiques. Après avoir durant un siècle hébergé plusieurs académies, dont celle de peinture et de sculpture, ainsi que divers artistes logés par le roi, l'ancien palais royal est véritablement transformé sous la Révolution en « Muséum central des arts de la République ». Il ouvre en 1793 en exposant environ 660 œuvres, essentiellement issues des collections royales ou confisquées chez des nobles émigrés ou dans des églises.</p>
        </div>
      </div>

    </div>
  </div>
{% endblock %}

  <div class=\"parallax-container valign-wrapper\">
    <div class=\"section no-pad-bot\">
      <div class=\"container\">
        <div class=\"row center\">
          <h5 class=\"header col s12 light\"></h5>
        </div>
      </div>
    </div>
    <div class=\"parallax\"><img src=\"{{ asset('bundles/oclouvre/images/image2.jpg') }}\" title=\"Les Noces de Cana - Veronese\" alt=\"Les Noces de Cana - Veronese\"></div>
  </div>
      

  <footer class=\"page-footer teal\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l12 s12\">
          <h5 class=\"white-text\">Le Louvre</h5>
          <p class=\"grey-text text-lighten-4\">Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre. Il est le plus grand des musées d'art du monde par sa surface d'exposition de 72 735 m27. Ses collections comprennent près de 460 000 œuvres. Celles-ci présentent l'art occidental du Moyen Âge à 1848, ceux des civilisations antiques qui l'ont précédé et influencé (orientales, égyptienne, grecque, étrusque et romaine), les arts des premiers chrétiens et de l'Islam.</p>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      <a class=\"brown-text text-lighten-3\" href=\"http://www.louvre.fr\">Musée du Louvre</a> &nbsp; © {{ 'now'|date('Y') }} Tous droits réservés.
      </div>
    </div>
  </footer> 
      
{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('bundles/oclouvre/js/init.js') }}\"></script>    
    <script type=\"text/javascript\" src=\"{{ asset('bundles/oclouvre/js/materialize.min.js') }}\"></script>    
    <script type=\"text/javascript\" src=\"{{ asset('bundles/oclouvre/js/materialize.js') }}\"></script> 
    <script type=\"text/javascript\" src=\"{{ asset('bundles/oclouvre/js/mon_js.js') }}\"></script>   
{% endblock %}  
      
      </body>
</html>", "OCLouvreBundle:Louvre:index.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle/Resources/views/Louvre/index.html.twig");
    }
}
