<?php

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build Open MPI with CUDA-aware support?";

$anchor[] = "build-cuda";

$a[] = "CUDA-aware support means that the MPI library can send and
receive GPU buffers directly.  This feature exists in the Open MPI v1.7
series and later.  The support is being continuously updated so
different levels of support exist in different versions.  We recommend
you use the latest v1.8 version for best support.

*Configuring the Open MPI v1.8 series and Open MPI v1.7.3, v1.7.4, v1.7.5*

With Open MPI v1.7.3 and later, the [libcuda.so] library is loaded
dynamically so there is no need to specify a path to it at configure
time.  Therefore, all you need is the path to the [cuda.h] header file.

1. Searches in default locations.  Looks for [cuda.h] in
[/usr/local/cuda/include].

<geshi bash>
shell$ ./configure --with-cuda
</geshi>

2. Searches for [cuda.h] in [/usr/local/cuda-v6.0/cuda/include].

<geshi bash>
shell$ ./configure --with-cuda=/usr/local/cuda-v6.0/cuda
</geshi>

Note that you cannot configure with *--disable-dlopen* as that will
break the ability of the Open MPI library to dynamically load
[libcuda.so].

*Configuring Open MPI v1.7, MPI v1.7.1 and v1.7.2*

<geshi text>
  --with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
                          DIR/lib, and DIR/lib64
  --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</geshi text>

Here are some examples of configure commands that enable CUDA support.

1. Searches in default locations.  Looks for [cuda.h] in
[/usr/local/cuda/include] and [libcuda.so] in [/usr/lib64].

<geshi bash>
shell$ ./configure --with-cuda
</geshi>

2. Searches for [cuda.h] in [/usr/local/cuda-v4.0/cuda/include] and
[libcuda.so] in default location of [/usr/lib64].

<geshi bash>
shell$ ./configure --with-cuda=/usr/local/cuda-v4.0/cuda
</geshi>

3. Searches for [cuda.h] in [/usr/local/cuda-v4.0/cuda/include] and
[libcuda.so] in [/usr/lib64] (same as previous one).

<geshi bash>
shell$ ./configure --with-cuda=/usr/local/cuda-v4.0/cuda --with-cuda-libdir=/usr/lib64
</geshi>

If the [cuda.h] or [libcuda.so] files cannot be found, then the
configure will abort.

*Note:* There is a bug in Open MPI v1.7.2 such that you will get an
error if you configure the library with *--enable-static*.  To get
around this error, add the following to your configure line and
reconfigure.  This disables the build of the PML BFO which is largely
unused anyways.  This bug is fixed in Open MPI v1.7.3.

<geshi bash>
shell$ ./configure --enable-mca-no-build=pml-bfo ...
</geshi>

See <a href=\"?category=runcuda\">this FAQ entry</a>
for detals on how to use the CUDA support.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I build Open MPI with CUDA-aware support using PGI?";

$anchor[] = "build-cuda-pgi";

$a[] = "With CUDA 6.5, you can build all versions of CUDA-aware Open MPI
without doing anything special. However, with CUDA 7.0 and CUDA 7.5, you
need to pass in some specific compiler flags for things to work correctly.
Add the following to your configure line.

<geshi bash>
      CFLAGS=-D__LP64__ --with-wrapper-cflags=\"-D__LP64__ -ta:tesla\"
</geshi>

*Update:* With PGI 15.9 and later compilers, the CFLAGS=-D__LP64__ is no longer needed.

";
