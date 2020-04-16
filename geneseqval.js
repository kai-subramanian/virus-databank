function valgene(){
    var gene=document.f1.geneseq;
    if(gene.length==15){
        return true;
        alert("Valid Gene Sequence");
    }
    return false;
}