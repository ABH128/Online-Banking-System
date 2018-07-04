// vector.cpp

#include <iostream>
#include <vector>

using namespace std;

int main()
{
	vector <int> my_vect;

	cout << my_vect.size() << endl;
	cout << my_vect.capacity() << endl;
	cout << my_vect.resize(5, 10) << endl;

	return 0;
	
	//Added a new line
}
