<?php
include "top.php";

$BCorps = array(
    array(Ben & Jerrys, Certified, Vermont),
    array(BrewDog, Certified, Scotland),
    array(Belgain Brewing, Certified, Colorado),
    array(Petaluma, Certified, Oakland),
    array(Wondermilk, Certified, Canada)
);
echo count($BCorps);
?>
<main>
    <article>
        <section>
            <p>Certified B Corporations, also known as B Corps, are companies that have undergone a rigorous assessment to evaluate their overall social and environmental performance. These organizations are driven by the aim to balance profit-making with a commitment to societal and environmental betterment. Becoming a certified B Corp requires meeting specific standards of transparency, accountability, and performance. These standards encompass a wide range of factors, including corporate governance, employee treatment, community impact, and environmental responsibility. Companies that achieve B Corp certification demonstrate their dedication to making a positive impact on the world beyond just financial gains. This certification signifies a firm's dedication to responsible business practices, which can significantly influence consumer behavior and investor confidence.</p>

            <p>The certification process for B Corps involves a comprehensive evaluation of a company's practices and policies to ensure they meet stringent social and environmental performance standards. This assessment examines a business's impact on its employees, customers, community, and the environment. B Corp certification provides a credible and recognizable benchmark that highlights a company's commitment to social responsibility and sustainability. It helps build trust among consumers and stakeholders, distinguishing certified B Corps as ethical and socially conscious entities. Moreover, being part of the B Corp community offers networking opportunities and access to resources that support businesses in their journey toward greater social and environmental impact. This collaborative network enables companies to learn from one another and collaborate on initiatives that contribute to the global movement for a more sustainable and equitable economy.</p>

            <ol>
                <?php
                foreach ($BCorps as $BCorps) {
                    print '<li>';
                    print $BCorps[0] . ', ';
                    print $BCorps[1] . ', ';
                    print $BCorps[2] . ', ';
                    print $BCorps[3] . ', ';
                    print $BCorps[4];
                    print '<li>' . PHP_EOL;
                }
                ?>
            </ol>
            <cite><a href="https://www.greenmatters.com/p/b-corp-certified-companies"></a></cite> 
        </section>
    </article>
</main>
<?php include 'footer.php'; ?>
</body>
</html>

