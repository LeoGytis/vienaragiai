function ZirB({skaicius}) {
    let spalva = 'green';
    if (skaicius === 1) { spalva = 'blue'; } 
    else  { spalva = 'red' }

    return (
        <>
        <h1 style={
            {
                color: spalva
            }
        }
        >Zebrai ir bebrai</h1>
        </>
    )
}

export default ZirB;