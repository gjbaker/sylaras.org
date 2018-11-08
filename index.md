---
active: home
---

<p class="sidebar-cta">
    <a href="http://pca2018.s3-website-us-east-1.amazonaws.com/">
        View the dynamic melanoma patient sample browser!

        <img class="cta-button"
             src="{{ "/assets/img/cta_button.png" | absolute_url }}"
             alt="Browse">
    </a>
</p>

## SYLARAS

<figure class="image">
    <img src="{{ "/assets/img/fig0.png" | absolute_url }}"
         alt="Figure 1"
         width="500">
</figure>

### Tissue-based cyclic immunofluorescence

* Agnostic to the platform for single-cell data acquisition (e.g. flow cytometry, mass cytometry, image-based cytometry methods).
* Modular and extensible experimental and computational workflows.
* Uses conventional wide-field, confocal and super-resolution microscopes.
* Antibodies can be selected based on the requirements of the project: no
  proprietary or unusual reagents required.

The key publication for SYLARAS is Baker et al. (2018), *Sytemic Lymphoid Architecture Response Assessment (SYLARAS): A Computational Tool for Discovery-based Immunophenotyping*.

* [Read the manuscript](https://doi.org/10.1101/151738)
* [Access supporting data and software code](https:)
* [Learn more and get training](training)
* Please cite this resource as `(SYLARAS.org, RRID:SCR_016267)`

SYLARAS is a computational tool for the comprehensive statistical analysis and concise visualization of single-cell data at scale study of immunologic response. A data-analytical framework written the in the Python programming language and run at the command-line of a personal computer, SYLARAS transforms single-cell data at scale into a comprehensive and concise visual compendium of the time and tissue-dependent changes occurring in the systemic cellular immune system in response to experimental immune perturbation.


<div class="embed-container">
    <iframe src="https://player.vimeo.com/video/269885646"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<div class="embed-container">
    <iframe src="https://player.vimeo.com/video/270692465"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>


### Innovation

Contemporary instruments for flow and mass cytometry allow for the rapid collection of large experimental datasets pertinent to the study of cancer immunology. However, their manual analysis through graphical user interface (GUI) software programs is prohibited by their size and multiplexity. As a postdoctoral fellow in Dr. Sorger’s lab, I have worked to address the disparity between the acquisition and analysis of single-data by developing a complementary set of experimental and computational workflows relevant to the longitudinal, multi-tissue assessment of cellular immune composition in response to immunologic perturbation (Fig. 1). The technology, referred to as Systemic Lymphoid Architecture Response Assessment (SYLARAS), uses immunophenotyping as a means to infer cell states differentially influenced by a given immune stimulus through the detection and quantification of changes in cell frequency.

### The SYLARAS Workflow

In SYLARAS, (1) an immune perturbagen (glioblastoma cancer cells in this case) is administered to a cohort of mice; a cohort of age-matched control mice receive vehicle only. (2) Various lymphoid tissues are harvested at fixed time points after perturbagen administration. (3) Tissues are processed into single-cell suspensions and plated in a 96 well V-bottom plate. (4) Cells are immunolabeled with an optimized multicolor immunofluorescence panel (OMIP) consisting of 11 fluorophore-conjugated antibodies targeting various cell surface antigens and stained with a fixable viability dye (FVD). (5) Single-cell data are acquired in a high-throughput manner by flow cytometry. (6) Raw data files are spectrally deconvolved and gated for viable singlets using conventional approaches. (7) The cleaned data undergo bias curation (see figure 2 below) and are computationally analyzed by the SYLARAS algorithm. workflow for discovery-based immunophenotyping

<figure class="image">
    <img src="{{ "/assets/img/fig1.png" | absolute_url }}"
         alt="Figure 1"
         width="700">
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
         width="700">
    <figcaption>
        Figure 1: Cell state identification through unidimensional gating
    </figcaption>
</figure>

<div class="embed-container">
    <iframe src="https://player.vimeo.com/video/269904895"
     frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

### Imaging

Imaging of t-CyCIF specimens can be performed on a variety of fluorescent
microscopes each of which represent a different tradeoff between data
acquisition time, image resolution and sensitivity (Figure 2). Specimens several
square centimeters in area are often examined at a resolution of ~1 µm on slide
scanners, but high resolution image is obtained using confocal or structured
illumination microscopes.

<figure class="image">
    <img src="{{ "/assets/img/figure2.jpg" | absolute_url }}"
         alt="Figure 2"
         width="500">
    <figcaption>
        Figure 2: t-CyCIF of a metastatic melanoma at different resolutions
    </figcaption>
</figure>

### Antibodies for tissue-based CyCIF

In the first cycle of t-CyCIF is possible to use indirect immunofluorescence and
secondary antibodies. In all other cycles antibodies are directly conjugated to
fluorophores, typically Alexa 488, 555 or 647. As an alternative to chemical
coupling we have tested the Zenon™ antibody labelling method from ThermoFisher
in which isotype-specific Fab fragments pre-labelled with fluorophores are bound
to primary antibodies to create immune complexes; the immune complexes are then
incubated with tissue samples. This method is effective with some but not all
primary antibodies.

To date, we have tested commercial antibodies against ~200 proteins for their
compatibility with t-CyCIF. These antibodies include lineage makers,
cytoskeletal proteins, cell cycle regulators, the phosphorylated forms of
signaling proteins and kinases, transcription factors, markers of cell state
including quiescence, senescence, apoptosis, stress, etc.
(see [Table 1]({{ "/assets/data/CyCIF-Tested-Antibodies-May2018.xlsx" | absolute_url }})). Currently we rely
exclusively on commercial antibodies that have previously been validated using
immuno-histochemistry (IHC) or conventional immunofluorescence. We compare
staining by t-CyCIF and what has previously been reported for IHC staining
(Figure 3) We also compare directly antibodies against the same antigen by using
different antibodies in different channels; this enables pixel-level comparison
of the same cells (Figure 4).

<figure class="image">
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
</figure>

Efforts to date do not constitute a sufficient level of testing or validation
for clinical studies and patterns of staining described in this site or in our
publications should therefore be considered illustrative of the t-CyCIF approach
rather than definitive descriptions. We are currently assembling an OMERO
(https://www.openmicroscopy.org/omero/) database of matched t-CyCIF and IHC
images across multiple tissues and knockdown cell lines to further advance
antibody validation. This date will be available near the end of 2018.

### Image processing and data analysis

Image processing and data analysis are demanding in the case of high-plex tissue
images; we use software tools developed by others supplemented by a growing
number of specialized methods (code can be found
at [our GitHub repository](https://github.com/sorgerlab/cycif/). Once cells are
segmented and turned into intensity information, tools such as t-SNE can be used
in much the same way as with mass cytometry and other high-dimensional data
(Figure 5).

<figure class="image">
    <img src="{{ "/assets/img/figure5.jpg" | absolute_url }}"
         alt="Figure 5"
         width="800">
    <figcaption>
        Figure 5: t-CyCIF of human small intestine with analysis
    </figcaption>
</figure>

### Human subjects disclaimer

Human specimens were retrieved from the archives of the Brigham and Women’s
Hospital under a discarded/excess tissue protocol as detailed in Institutional
Review Board (IRB) protocol IRB17-1688 (2018) for research deemed to “involve no
more than minimal risk to the subjects.”

### Funding

This work was made possible by American Cancer Society Postdoctoral Fellowship award PF-16-197-01-LIB awarded to Gregory J. Baker together with the support of the Ludwig Center at Harvard Medical School.

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

1. Lin J-R, Fallahi-Sichani M, Chen J-Y, Sorger PK. Cyclic Immunofluorescence
   (CyCIF), A Highly Multiplexed Method for Single-cell Imaging. Curr Protoc
   Chem Biol. 2016 Dec 7;8(4):251-264. PMCID: PMC5233430

1. Lin J-R, Izar B, Mei S, Wang S, Shah P, Sorger P. A simple open-source method
   for highly multiplexed imaging of single cells in tissues and tumours.
   bioRxiv. 2017 Jun 19;151738.

1. Coy S, Rashid R, Lin J-R, Du Z, Donson AM, Hankinson TC, Foreman NK, Manley
   PE, Kieran MW, Reardon DA, Sorger PK, Santagata S. Multiplexed
   Immunofluorescence Reveals Potential PD-1/PD-L1 Pathway Vulnerabilities in
   Craniopharyngioma. Neuro-Oncol. 2018 Mar 2; PMID: 29509940
