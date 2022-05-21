function Hello({spalva, size, skaicius}) {
    // const skaicius = 4;
    return (
         <h1 style={
             {
                 color: spalva,
                 fontSize: size * 2 + 'px'
             }
         }

         >Hello ka tu? {skaicius + 11}</h1>
    )
}

export default Hello;