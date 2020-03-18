#include <iostream>
#include <iomanip>
#include <iterator>
#include <vector>
#include <algorithm>
#include <functional>
#include <string>
#include <string.h>
#include <ctime>
#include <iostream>
#include <cstdlib>
#include <fstream>
#include <time.h>
//#define SIMPLE

//#define ALTERNATE

#define ITERATOR

#define TIME

using namespace std;


#ifdef SIMPLE
int main() {
	fstream file;
    vector<string> V;      // Container
    string tmp;
    int N, M, length;
    ofstream out ( "SIMPLE.in" );
    int A[6]={1000, 5000, 10000, 50000, 100000, 500000},B[3]={100, 500, 1000};
    for(int k=0;k<6;k++)
    {
    	for(int l=0;l<3;l++)
    	{
    		N=A[k];
    		M=B[l];
    	    string name= "N"+to_string(N)+"M"+to_string(M);
    	    file.open(name+".in", ios::in);        //將檔案開啟為輸入狀態
			#ifdef TIME
				clock_t t;
				float Time_total=0.0;
				t = clock();
			#endif
    	    while ( getline(file, tmp) )
    	         V.push_back(tmp);

			#ifdef TIME
				t = clock() - t;
				//cout << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
				t = clock();
			#endif
				// sort its argument in ascending order
				sort( V.begin(), V.end() ); //, greater<string>() );     // Iterator & Algorithm

			#ifdef TIME
				t = clock() - t;
				//cout << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
				t = clock();
			#endif

				copy( V.begin(), V.end(), ostream_iterator<string>(cout, "\n") );

			#ifdef TIME
				t = clock() - t;
				//cout << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
			#endif
				//cout << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
				out << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
			V.clear();
			file.close();
			out<<"------------------------------"<<endl;
    	}
    }
    cout<<"end"<<endl;
    out.close();
    return 0;
}
#endif // SIMPLE
#ifdef ITERATOR
#include <ctime>

class line_iterator
{
    istream*  in;
    string   line;
    bool     at_end;
    void read( ) {
        if (*in)
            getline(*in, line);
        at_end = (*in) ? true : false;
    }
public:
    typedef  input_iterator_tag  iterator_category;
    typedef  string  value_type;
    typedef  ptrdiff_t  difference_type;
    typedef  const string*  pointer;
    typedef  const string&  reference;

    line_iterator( ) : in(&cin), at_end(false) { }
    line_iterator(istream& s) : in(&s) { read( ); }
    reference operator*( ) const { return line; }
    pointer operator->( ) const { return &line; }

    line_iterator operator++( ) {  // prefix ++
        read( );
        return *this;
    }

    line_iterator operator++(int) {  // postfix ++
        line_iterator  tmp = *this;
        read();
        return tmp;
    }

    bool operator==(const line_iterator& i) const {
        return (in == i.in && at_end == i.at_end) ||
               (at_end == false && i.at_end == false);
    }

    bool operator!=(const line_iterator& i) const {
        return !(*this == i);
    }
}; // end  of class line_iterator

int  main()
{
    fstream file;
    int A[6]={1000, 5000, 10000, 50000, 100000, 500000},B[3]={100, 500, 1000};
    int N, M;
    ofstream out ("iterator.in");
    for(int k=0;k<6;k++)
    {
    	for(int l=0;l<3;l++)
    	{
            N=A[k];
    		M=B[l];
    	    string name= "N"+to_string(N)+"M"+to_string(M);
            file.open(name+".in", ios::in);        //將檔案開啟為輸入狀態
			#ifdef TIME
				clock_t t;
				float Time_total=0.0;
				t = clock();
			#endif
			line_iterator  iter(file);
			line_iterator  end_of_file;
			vector<string>  V(iter, end_of_file);
			#ifdef TIME
				t = clock() - t;
				//cout << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				t = clock();
			#endif
				// sort its argument in ascending order
				sort( V.begin(), V.end() ); //, greater<string>() );     // Iterator & Algorithm

			#ifdef TIME
				t = clock() - t;
				//cout << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
				t = clock();
			#endif

				copy( V.begin(), V.end(), ostream_iterator<string>(cout, "\n") );

			#ifdef TIME
				t = clock() - t;
				//cout << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
			#endif
				//cout << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
				out << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
			V.clear();
			out<<"----------"<<endl;
			file.close();
    	}
    }
    cout<<"end"<<endl;
    out.close();
}

#endif

#ifdef ALTERNATE
struct  strtab_cmp
{
    typedef  vector<char>::iterator  strtab_iterator;

    bool  operator()( const pair<strtab_iterator, strtab_iterator>& x,
                       const pair<strtab_iterator, strtab_iterator>& y ) const {
        return lexicographical_compare( x.first, x.second, y.first, y.second );
    }
};

struct  strtab_print
{
    typedef  vector<char>::iterator strtab_iterator;
    ostream& out;

    strtab_print(ostream&  os) : out (os) {}

    void  operator()( const pair<strtab_iterator, strtab_iterator>&  s ) const {
        copy( s.first, s.second, ostream_iterator<char>(cout) );
    }
};


int main()
{
    vector<char>  strtab;	   // Create string table
    char  c;
    fstream file;
    int A[6]={1000, 5000, 10000, 50000, 100000, 500000},B[3]={100, 500, 1000};
    int N, M;
    ofstream out ("ALTERNATE.in");
    for(int k=0;k<6;k++)
    {
    	for(int l=0;l<3;l++)
    	{
            N=A[k];
    		M=B[l];
    	    string name= "N"+to_string(N)+"M"+to_string(M);
            file.open(name+".in", ios::in);        //將檔案開啟為輸入狀態
			#ifdef TIME
				clock_t t;
				float Time_total=0.0;
				t = clock();
			#endif
			while (file.get(c)) {
				strtab.push_back(c);
			}
			// Parse the string table into lines.
			typedef  vector<char>::iterator  strtab_iterator;
			vector<pair<strtab_iterator, strtab_iterator>> lines;
			strtab_iterator  start = strtab.begin();
			while (start != strtab.end()) {
				strtab_iterator  next = find( start, strtab.end(), '\n' );

				if (next != strtab.end())
					++next;
				lines.push_back( make_pair( start, next ) );
				start = next;
			}
			#ifdef TIME
				t = clock() - t;
				//cout << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Input took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
				t = clock();
			#endif
			// Sort the vector of lines
			sort( lines.begin(), lines.end(), strtab_cmp() );
			#ifdef TIME
				t = clock() - t;
				//cout << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Sorting took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
				t = clock();
			#endif
			// Write the lines to standard output
			for_each( lines.begin(), lines.end(), strtab_print(cout) );
			#ifdef TIME
				t = clock() - t;
				//cout << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				out << "Output took " << t << " clicks (" << ((float) t)/CLOCKS_PER_SEC << " seconds).\n";
				Time_total+=((float) t)/CLOCKS_PER_SEC;
			#endif
				//cout << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
				out << "Total took " << t << " clicks (" << Time_total << " seconds).\n";
			lines.clear();
			file.close();
			out<<"------------------------------"<<endl;
    	}
    }
    out.close();
    return 0;
}
#endif // ALTERNATE




