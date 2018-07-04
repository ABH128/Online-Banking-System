// insertion_sort.cpp

#include <iostream>

using namespace std;

int arr_size;

int* getArrayInput();
void insertionSort(int*, int);
void printArray(int*, int);

int* getArrayInput()
{
	cout << "Please enter the size of the array: ";
	cin >> arr_size;

	int *my_arr = new int[arr_size];
	cout << "Enter " << arr_size <<" integers: ";

	for (int i = 0; i < arr_size; ++i)
		cin >> my_arr[i];

	return my_arr;
}

void insertionSort(int* arr, int arr_size)
{
	int i, j, key;

	for (i = 1; i < arr_size; ++i)
	{
		key = arr[i];
		j = i - 1;

		while (j >= 0 && arr[j] > key)
		{
			arr[j+1] = arr[j];
			j = j-1;
		}

		arr[j+1] = key;
	}
}

void printArray(int *arr, int arr_size)
{
	for (int i = 0; i < arr_size; ++i)
		cout << arr[i] << ", ";

}

int main()
{
	int *array = getArrayInput();
	printArray(array, arr_size);
	insertionSort(array, arr_size);
	printArray(array, arr_size);

	delete[] array;
	return 0;
}