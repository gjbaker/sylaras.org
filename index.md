---
active: home
title: title of home page
---
<!-- <h1>
{{ page.title }}
</h1>

<h2>
{{ site.title }}
</h2> -->

<!-- <p class="sidebar-cta">
    <a href="http://pca2018.s3-website-us-east-1.amazonaws.com/">
        View the dynamic melanoma patient sample browser!

        <img class="cta-button"
             src="{{ "/assets/img/cta_button.png" | absolute_url }}"
             alt="Browse">
    </a>
</p> -->


### SYLARAS is...

* a modular and extensible computational workflow for single-cell
analysis run at the command line of a personal computer
* agnostic to the data acquisition platform

The key publication for SYLARAS is Baker et al. (2018), *Sytemic Lymphoid Architecture Response Assessment (SYLARAS): A Computational Tool for Discovery-based Immunophenotyping*.

* [Read the manuscript](https://doi.org/10.1101/151738)
* [Access source code](https://github.com/gjbaker/sylaras.org)
* [Learn more and get training](training)
* Please cite this resource as `(Baker et al. (2018))`

### About
SYLARAS is a set of complementary experimental and computational workflows for screening
the time and tissue-dependent changes occurring in systemic cellular immune composition
in response to experimental perturbation. SYLARAS uses immunophenotyping as a means to
infer cell populations differentially influenced by a given immune stimulus through the
quantification of changes in their frequency. Written in the open-source Python programming
language, the data-analytical framework is modular and extensible, and run at the
command-line of a personal computer. SYLARAS transforms multi-dimensional, quantitative
single-cell data no matter the method of its acquisition into a comprehensive and concise
visual compendium of the time and tissue-dependent changes occurring in the systemic
cellular immune composition in response to experimental perturbation. Immune cells migrate, differentiate, and proliferate in response to mitogenic and antigenic stimuli. Although the mechanisms underlying these changes are not always clear, the resultant redistribution in the frequency of immune cells that constitute specific lymphoid tissues is readily detected and quantified by immunophenotyping: a technique for measuring the proportions of phenotypically distinct immune cell populations based on differential antigen expression.

<!-- <div class="embed-container">
    <iframe src="https://player.vimeo.com/video/269885646"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<div class="embed-container">
    <iframe src="https://player.vimeo.com/video/270692465"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div> -->

### Innovation

Contemporary instruments for flow and mass cytometry allow for the rapid collection of large experimental datasets pertinent to the study of cancer immunology. However, the need for complex gating strategies and comprehensive statistical analysis through graphical user interface (GUI) software programs is prohibited by their size and multiplexity. SYLARAS addresses the disparity between the acquisition and analysis of single-data by developing a complementary set of experimental and computational workflows relevant to the longitudinal, multi-tissue assessment of cellular immune composition in response to immunologic perturbation (Fig. 1). Source code can be found
at [our GitHub repository](https://github.com/gjbaker/sylaras.org)

### The SYLARAS Workflow

In SYLARAS, (1) an immune perturbagen (glioblastoma cancer cells in this case) is administered to a cohort of mice; a cohort of age-matched control mice receive vehicle only. (2) Various lymphoid tissues are harvested at fixed time points after perturbagen administration. (3) Tissues are processed into single-cell suspensions and plated in a 96 well V-bottom plate. (4) Cells are immunolabeled with an optimized multicolor immunofluorescence panel (OMIP) consisting of 11 fluorophore-conjugated antibodies targeting various cell surface antigens and stained with a fixable viability dye (FVD). (5) Single-cell data are acquired in a high-throughput manner by flow cytometry. (6) Raw data files are spectrally deconvolved and gated for viable singlets using conventional approaches. (7) The cleaned data undergo bias curation (see figure 2 below) and are computationally analyzed by the SYLARAS algorithm. workflow for discovery-based immunophenotyping. Click [here]({{ "/assets/data/materials_and_methods copy.docx" | absolute_url }}) for SYLARAS Materials and Methods.

<figure class="image">
    <img src="{{ "/assets/img/fig1.png" | absolute_url }}"
         alt="Figure 1"
         width="700"
         class="img-fluid">
    <figcaption>
        Figure 1: The SYLARAS workflow for discovery-based immunophenotyping
    </figcaption>
</figure>

### Cell State Identification Through Unidimensional Gating

The SYLARAS computational algorithm consists of an open-source data-analytical framework written in the Python programming language and executed on the command-line. The algorithm sidesteps the requirement for complex multidimensional gating strategies in the identification of immunophenotypically-distinct cell states by asking the investigator to perform a simplified unidimensional gating procedure prior to programmatically analyzing the data (Fig. 2). The goal of this procedure is to distinguish between experimental background and on-target antibody labeling for each immunomarker and is expedited by formatting the study’s histograms (per sample per immunomarker) as a scrolling HTML table viewable with a web browser. The signal intensity distribution of unlabeled or isotype-labeled control cells is superimposed on each histogram as a fiducial guide to aid in the selection of an appropriate gate by revealing how signal intensities associated with autofluorescence/off-target antibody binding compare to experimental signal intensity distributions (Fig. 2a-c).
Once curated, the gate values are input into the SYLARAS algorithm for programmatic subtraction from the signal intensity values of their corresponding histograms. This causes the gate to become the zero point and background signal intensities to become negative (Fig. 2d). Since immunomarker signals are now binarized according to mathematical sign, the algorithm bins cells in the dataset among 2M orthants of an M-dimensional hypercube, where M is the number of immunomarkers and each orthant represents a unique immunophenotype (e.g. CDx+, CDy-, CDz+…) (Fig. 2e). This allows thousands of immunophenotypes to be identified without the non-commutativity and labor-intensity of manual gating in multiple dimensions. SYLARAS then computes statistics on immunophenotypes of interest and displays the results on each as an information-dense graphical dashboard (Fig. 3). A set of SYLARAS dashboards serves as a concise and comprehensive compendium of the time and tissue-dependent changes occurring in the systemic cellular immune system in response to a given immune perturbagen (e.g. cancer, viruses, bacteria, autoimmunity model, vaccination, immunotherapy, etc.).

<figure class="image">
    <img src="{{ "/assets/img/fig2.png" | absolute_url }}"
         alt="Figure 1"
         width="700"
         class="img-fluid">
    <figcaption>
        Figure 1: Cell state identification through unidimensional gating
    </figcaption>
</figure>

<!-- <div class="embed-container">
    <iframe src="https://player.vimeo.com/video/269904895"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div> -->

### Dashboards

<figure class="image">
    <img src="{{ "/assets/img/PMN_dashboard.png" | absolute_url }}"
         alt="Figure 2"
         width="600"
         class="img-fluid">
    <figcaption>
        Example dashboard: One of 30 cell type specific SYLARAS dashboards programmatically generated during the initial screen of the GL261 GBM model. (1) immunophenotype alias (2) lineage (3) expressed immunomarkers (4) forward and side scatter distributions (5) Logicle-transformed signal intensity distributions of 11 immunomarkers (6 and 7) Tissue and time point-specific average percent difference (left) and log2 fold-change (right) between GBM-burdened and control mice (n=8 mice/group/tissue/time point). Icons indicate under what conditions and to what extent statistical significance was achieved. (8) The immunophenotype’s tissue distribution across 5 lymphoid organs color-coded as in number 6, (9) Percentage of the full dataset accounted for by the immunophenotype (10) Replicate data across the study’s 48 mice showing the percentage of each tissue accounted for by the immunophenotype.
    </figcaption>
</figure>

<!-- <figure class="image">
    <img src="{{ "/assets/img/dashboards.png" | absolute_url }}"
         alt="Figure 2"
         width="1200">
    <figcaption>
        SYLARAS dashboards: This set of 30 programmatically-generated graphical dashboards (1 per cell state) serves as a comprehensive visual compendium of tumor-induced changes in mouse systemic cellular immune composition in response to the GL261 mouse GBM model.
    </figcaption>
</figure> -->


<!-- <figure class="image">
    <img src="{{ "/assets/img/figure3.jpg" | absolute_url }}"
         alt="Figure 3"
         width="800">
    <figcaption>
        Figure 3: Anti-PD1 staining in two successive sections of human tonsil
        by t-CyCIF on the left and IHC in the middle; DNA stained in blue. Right
        panel shows fraction of positive cells for several antibodies by the
        t-CyCIF and IHC.
    </figcaption>
</figure>

<figure class="image">
  <img src="{{ "/assets/img/figure4.jpg" | absolute_url }}"
       alt="Figure 4"
       width="290">
  <figcaption>
    Figure 4: Correlation of anti-PD1 staining by four different antibodies
    scored on a pixel-by-pixel basis as determined from a single section of
    human tonsil. Antibody 2 performs poorly in this comparison.
  </figcaption>
</figure> -->


### Funding

This work was made possible by an American Cancer Society Postdoctoral Fellowship awarded to Gregory J. Baker (PF-16-197-01-LIB), a National Institutes of Health P50 grant awarded to Peter K. Sorger (GM107618), and a National Cancer Institute U54 multicenter grant to Peter K. Sorger (CA225088).

### Publications

1. Gerdes MJ, Sevinsky CJ, Sood A, Adak S, Bello MO, Bordwell A, Can A, Corwin
   A, Dinn S, Filkins RJ, Hollman D, Kamath V, Kaanumalle S, Kenny K, Larsen M,
   Lazare M, Li Q, Lowes C, McCulloch CC, McDonough E, Montalto MC, Pang Z,
   Rittscher J, Santamaria-Pang A, Sarachan BD, Seel ML, Seppo A, Shaikh K, Sui
   Y, Zhang J, Ginty F. Highly multiplexed single-cell analysis of
   formalin-fixed, paraffin-embedded cancer tissue. Proc Natl Acad Sci U S A.
   2013 Jul 16;110(29):11982-11987. PMCID: PMC3718135

1. Lin J-R, Fallahi-Sichani M, Sorger PK. Highly multiplexed imaging of single
   cells using a high-throughput cyclic immunofluorescence method. Nat Commun.
   2015 Sep 24;6:8390. PMCID: PMC4587398
